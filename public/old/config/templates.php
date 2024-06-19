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
        array("title"=>"Welcome Message", "type"=>"text", "name"=>"edl_char_1"),
        array("title"=>"Slogan", "type"=>"number", "name"=>"ed_number_1"),
        array("title"=>"Մի փոքր մեր գործունեությունից", "type"=>"text", "name"=>"edl_char_2"),
        array("title"=>"Մեր Գործառույթները", "type"=>"text", "name"=>"edl_char_3"),
        array("title"=>"Մեր Գործառույթները text", "type"=>"text", "name"=>"edl_text_1"),
        array("title"=>"Մեր Գործառույթները Նկար", "type"=>"text", "name"=>"ed_char_1"),
        array("title"=>"Գնային Քաղաքականություն", "type"=>"text", "name"=>"edl_char_4"),
        array("title"=>"Գնային Քաղաքականություն text", "type"=>"text", "name"=>"edl_text_2"),
        array("title"=>"Գնային Քաղաքականություն Նկար", "type"=>"text", "name"=>"ed_char_2"),
        array("title"=>"Մեզ վստահում են", "type"=>"text", "name"=>"edl_char_5"),
        array("title"=>"Բոլոր Գործընկերները", "type"=>"text", "name"=>"edl_char_6"),

    );

    $content = array(
        array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
        array("title"=>"Facebook", "type"=>"text", "name"=>"ed_char_1"),
        array("title"=>"Instagram", "type"=>"text", "name"=>"ed_char_2"),
        array("title"=>"Linkedin", "type"=>"text", "name"=>"ed_char_3"),
        array("title"=>"Phone Number 1", "type"=>"text", "name"=>"ed_char_4"),
        array("title"=>"Phone Number 2", "type"=>"text", "name"=>"ed_char_5"),
        array("title"=>"Email", "type"=>"text", "name"=>"ed_char_6"),
        array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ", "type"=>"text", "name"=>"edl_char_1"),
        array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ թիվ", "type"=>"text", "name"=>"edl_char_2"),
        array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ", "type"=>"text", "name"=>"edl_char_1"),
        array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ թիվ", "type"=>"text", "name"=>"edl_char_2"),
        array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ", "type"=>"text", "name"=>"edl_char_3"),
        array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ թիվ", "type"=>"text", "name"=>"edl_char_4"),
        array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ", "type"=>"text", "name"=>"edl_char_5"),
        array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ թիվ", "type"=>"text", "name"=>"edl_char_6"),
        array("title"=>"Address", "type"=>"text", "name"=>"edl_char_7"),
    );
?>
<?php
	$templates = array(
        array("id"=>"Home", "title"=>"Գլխավոր էջ", "fields"=>$home, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
        array("id"=>"Content", "title"=>"Կրկնվոք Ինֆորմացիա", "fields"=>$content, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
	);
?>
