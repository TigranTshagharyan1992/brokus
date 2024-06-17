<?php
	//Available monolanguage types: text, color, url, email, number, datetime, date, time, image, file, textarea, select, multiselect, optgroup, multioptgroup, picker, multipicker
	//Available multilanguage types: text url email image file textarea
	//select, multiselect, optgroup, multioptgroup, picker, multipicker types have pid attribute
	//textarea has isRichText boolean attribute
	//multipicker and picker have reducer attribute
	//multipicker has flags and titleField attribute
	//Field names have to match with column names in DB and be with correct prefix
	//All native html elements have optional required, value attributes
	//Templates have hasGallery, hasSeo, isWidget boolean attributes and onAdd, onUpdate event attributes
?>
<?php
	require("helper.php");

	$section = array(
		array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
        array("title"=>"Image", "type"=>"image", "name"=>"ed_image"),
	);

    $home = array(
        array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
        array("title"=>"Main Img", "type"=>"image", "name"=>"ed_image"),
        array("title"=>"Welcome Message", "type"=>"textarea", "name"=>"edl_text_1", "isRichText"=>false),
        array("title"=>"Slogan", "type"=>"number", "name"=>"ed_number_1"),
    );
?>
<?php
	$templates = array(
        array("id"=>"Home", "title"=>"Գլխավոր էջ", "fields"=>$home, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
	);
?>
