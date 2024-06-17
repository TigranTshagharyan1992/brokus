<?php


function getAllSheets($sheet, $type="Xlsx")
{
	$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($type);

	$reader->setReadDataOnly(true);

	$reader->setReadEmptyCells(false);

	$reader->setLoadAllSheets();
	$spreadsheet = $reader->load($sheet);

	$ret = [];
	foreach($spreadsheet->getAllSheets() as $item)
	{
		$item->garbageCollect();
		$maxCol = $item->getHighestDataColumn();
		$maxRow = $item->getHighestDataRow();

		$ret[] = $item->rangeToArray('A1:' . $maxCol . $maxRow);
	}
	return $ret;
}

function writeToJSON($entityId)
{
	global $db;

	$entity= getEntity($entityId);

	$filename_hy = $entity['ed_char_1'];
	$filename_en = $entity['ed_char_2'];
	$filename_fr = $entity['ed_char_3'];

	$directory = '../sheets';
	if(!is_dir($directory)) {
		mkdir($directory, 0755, true);
	}
	if(!is_dir($directory.'/'.date('Y'))) {
		mkdir($directory.'/'.date('Y'), 0755, true);
	}
	$directory .= '/'.date('Y');
	if(!is_dir($directory.'/'.date('m'))) {
		mkdir($directory.'/'.date('m'), 0755, true);
	}
	$directory .= '/'.date('m');

	if($entity['ed_char_1'] != NULL && trim($entity['ed_char_1']) != '' && is_file($entity['ed_char_1']) && pathinfo($entity['ed_char_1'], PATHINFO_EXTENSION) != 'json')
	{
		$sheet_content = getAllSheets($entity['ed_char_1']);
		$filename_hy = $directory.'/'.$entityId.'_hy.json';

		if(is_file($filename_hy))
		{
			unlink($filename_hy);
		}
//		unlink($entity['ed_char_1']);
		file_put_contents($filename_hy, json_encode($sheet_content));
		chmod($filename_hy, 0644);
	}

	if($entity['ed_char_2'] != NULL && trim($entity['ed_char_2']) != '' && is_file($entity['ed_char_2']) && pathinfo($entity['ed_char_2'], PATHINFO_EXTENSION) != 'json')
	{
		$sheet_content = getAllSheets($entity['ed_char_2']);
		$filename_en = $directory.'/'.$entityId.'_en.json';

		if(is_file($filename_en))
		{
			unlink($filename_en);
		}
//		unlink($entity['ed_char_2']);
		file_put_contents($filename_en, json_encode($sheet_content));
		chmod($filename_en, 0644);
	}

	if($entity['ed_char_3'] != NULL && trim($entity['ed_char_3']) != '' && is_file($entity['ed_char_3']) && pathinfo($entity['ed_char_3'], PATHINFO_EXTENSION) != 'json')
	{
		$sheet_content = getAllSheets($entity['ed_char_3']);
		$filename_fr = $directory.'/'.$entityId.'_fr.json';

		if(is_file($filename_fr))
		{
			unlink($filename_fr);
		}
//		unlink($entity['ed_char_3']);
		file_put_contents($filename_fr, json_encode($sheet_content));
		chmod($filename_fr, 0644);
	}
	$db->request("UPDATE entity_data SET ed_char_1='".$filename_hy."', ed_char_2='".$filename_en."', ed_char_3='".$filename_fr."', ed_char_4='".$entity['ed_char_1']."', ed_char_5='".$entity['ed_char_2']."', ed_char_6='".$entity['ed_char_3']."' WHERE ed_entity=?", array($entityId));

	return true;

}

function copyOldFiles($entityId)
{
	global $db;

	$entity= getEntity($entityId);

	$structure = $db->data("SELECT * FROM entities LEFT JOIN entity_data ON ed_entity=entity_id WHERE entity_parent=? AND entity_type='fund_structure' ORDER BY entity_order DESC", array($entity['entity_id']));
	if(empty($structure))
	{
		return false;
	}

	$year = $db->data("SELECT * FROM entities LEFT JOIN entity_data ON ed_entity=entity_id WHERE entity_parent=? AND entity_type='fund_year' AND ed_title LIKE '%".date('Y')."%' ORDER BY entity_order DESC", array($structure[0]['entity_id']));
	if(empty($year))
	{
		$query = "INSERT INTO entities (entity_creation_date, entity_creator, entity_order, entity_parent, entity_visible, entity_type, entity_removable, entity_is_widget)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$db->request($query, array(date('Y-m-d H:i:s'), 1, 0, $structure[0]['entity_id'], 1, 'fund_year', 0, 0));
		$insert_id = $db->insertId();

		$query2 = "INSERT INTO entity_data (ed_entity, ed_title)
                            VALUES (?, ?)";

		$db->request($query2, array($insert_id, date('Y')));
		$year = $db->data("SELECT * FROM entities LEFT JOIN entity_data ON ed_entity=entity_id WHERE entity_parent=? AND entity_type='fund_year' AND ed_title LIKE '%".date('Y')."%' ORDER BY entity_order DESC", array($structure[0]['entity_id']));
	}

	$directory = '../sheets';
	if(!is_dir($directory)) {
		mkdir($directory, 0755, true);
	}
	$year_str = date('m') != 1 ? date('Y') : date('Y', strtotime('-1 year'));
	if(!is_dir($directory.'/'.$year_str)) {
		mkdir($directory.'/'.$year_str, 0755, true);
	}
	$directory .= '/'.$year_str;
	$month_str = date('m', strtotime('-1 month'));
	if(!is_dir($directory.'/'.$month_str)) {
		mkdir($directory.'/'.$month_str, 0755, true);
	}
	$directory .= '/'.$month_str;

	$hy = $entity['ed_char_1'];
	$en = $entity['ed_char_2'];
	$fr = $entity['ed_char_3'];
	if(isset($entity['ed_char_1']) && is_file($entity['ed_char_1']))
	{
		$hy = $directory.'/'.$entityId.'_hy.json';
		copy($entity['ed_char_1'], $hy);
	}
	if(isset($entity['ed_char_2']) && is_file($entity['ed_char_2']))
	{
		$en = $directory.'/'.$entityId.'_en.json';
		copy($entity['ed_char_2'], $en);
	}
	if(isset($entity['ed_char_3']) && is_file($entity['ed_char_3']))
	{
		$fr = $directory.'/'.$entityId.'_fr.json';
		copy($entity['ed_char_3'], $fr);
	}

	$month = $db->data("SELECT * FROM entities LEFT JOIN entity_data ON ed_entity=entity_id WHERE entity_parent=? AND entity_type='fund_month_xls' AND ed_title LIKE '%".date('m')."%' ORDER BY entity_order DESC", array($year[0]['entity_id']));
	if(empty($month))
	{
		$query = "INSERT INTO entities (entity_creation_date, entity_creator, entity_order, entity_parent, entity_visible, entity_type, entity_removable, entity_is_widget)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$db->request($query, array(date('Y-m-d H:i:s'), 1, 0, $year[0]['entity_id'], 1, 'fund_month_xls', 0, 0));
		$insert_id = $db->insertId();

		$query2 = "INSERT INTO entity_data (ed_entity, ed_title, ed_char_1, ed_char_2, ed_char_3)
                            VALUES (?, ?, ?, ?, ?)";

		$db->request($query2, array($insert_id, date('m'), $hy, $en, $fr));
	}
	else
	{
		$db->request("UPDATE entity_data SET ed_char_1='".$hy."', ed_char_2='".$en."', ed_char_3='".$fr."' WHERE ed_entity=?", array($month['entity_id']));
	}

	return true;
}

function appendToJSON($entityId)
{
	global $db;

	$entity= getEntity($entityId);
	if(empty($entity['ed_char_1']) || !is_file($entity['ed_char_1']))
	{
		return false;
	}

	$sheet = getAllSheets($entity['ed_char_1'], "Csv");

	$decoded = json_decode(file_get_contents('../formula/init.json'), true);

	if(empty($sheet) || empty($decoded))
	{
		return false;
	}

	$date_chunks = explode('/', $sheet[0][1][4]);
	if(!isset($decoded[$date_chunks[2]]))
	{
		$decoded[$date_chunks[2]] = [];
	}
	$decoded[$date_chunks[2]][] = [
		$date_chunks[1].'/'.$date_chunks[0].'/'.$date_chunks[2],
		$sheet[0][1][7],
		$sheet[0][2][7],
		$sheet[0][3][7]
	];

	file_put_contents('../formula/init.json', json_encode($decoded));
	return true;
}
?>