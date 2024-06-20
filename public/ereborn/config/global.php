<?php
	$creditAdditionalFields = array(

	);

	$seoFields = array(
		array("title"=>"Url", "type"=>"text", "name"=>"es_url"),
		array("title"=>"Title", "type"=>"text", "name"=>"es_title"),
		array("title"=>"Keywords", "type"=>"textarea", "name"=>"es_keywords", "isRichText"=>false),
		array("title"=>"Description", "type"=>"textarea", "name"=>"es_description", "isRichText"=>false),
	);

	$custormSortFields = array(
		0 => "entity_id DESC",
	);

	$disableAddButtonIn = array();

	$disableImagesIn = array();

	$disableSubsectionsIn = array();

	$customDateFields = array(

	);

	$customDateTitles = array(

	);

	$wordsMap = array(
	);

	$templateMap = array(
		0 => array("Content", "Home","About")
	);

	$widgetWhiteList = array("");

	$additionalColumnsInSections = array(
		0=>array("entity_removable"=>"Removable"),
	);

	$additionalColumnsInWidgets = array(/*"ed_number_1"=>"Թիվ 1"*/);

	$templateChildren = array(
	);

	$templateAdditionalColumns = array(
//		"Transactions" => ["ed_char_1" => "Finished","ed_char_2" => "Payment type"]
	);

	$templateCustormSortFields = array(
//		"Users" => "entity_creation_date DESC",
	);

	$templateDisableSubsectionsIn = array();

	$templateTitleFields = array(
		/*"parliamentMeeting"=>array("ed_datetime_2"),*/
	);

	$reducers = array(

	);

	$titleFields = array(

	);
	// Subsections view name
	$subSectionLabels = array(

	);

	$subWidgetLabels = array(

	);

	$templatePidOverride = array(

	);

	$templateDisableImagesIn = array("organization", "category");

	$templateCustomDateFields = array(
		"organization" => "ed_datetime_1",
		"category" => "ed_datetime_1",
	);

	$templateCustomDateTitles = array(
        $templateMap
	);

	define("TITLE_FIELD", "edl_title");

	define("IMG_FIELD", "ed_image");

	define("PAGE_SIZE", 100);

	define("DISABLE_THUMBNAIL", true);
?>
