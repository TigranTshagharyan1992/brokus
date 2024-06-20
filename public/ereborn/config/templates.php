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
    array("title"=>"Գլխավոր նկար", "type"=>"image", "name"=>"ed_image"),
    array("title"=>"Յուրաքանչյուր խնդիր ունի իր ճիշտ լուծումը...", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ թիվ", "type"=>"text", "name"=>"ed_char_1"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ", "type"=>"text", "name"=>"edl_char_2"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_2"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ", "type"=>"text", "name"=>"edl_char_3"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_3"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ", "type"=>"text", "name"=>"edl_char_4"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ թիվ", "type"=>"text", "name"=>"ed_char_4"),
    array("title"=>"Մի փոքր մեր գործունեությունից", "type"=>"text", "name"=>"edl_char_5"),
    array("title"=>"Մեր Գործառույթները", "type"=>"text", "name"=>"edl_char_6"),
    array("title"=>"Մեր Գործառույթները text", "type"=>"textarea", "name"=>"edl_text_2","isRichText"=>false),
    array("title"=>"Մեր Գործառույթները Նկար", "type"=>"image", "name"=>"ed_char_5"),
    array("title"=>"Գնային Քաղաքականություն", "type"=>"text", "name"=>"edl_char_7"),
    array("title"=>"Գնային Քաղաքականություն text", "type"=>"textarea", "name"=>"edl_text_3","isRichText"=>false),
    array("title"=>"Գնային Քաղաքականություն Նկար", "type"=>"image", "name"=>"ed_char_6"),
    array("title"=>"Մանրամասն", "type"=>"text", "name"=>"edl_char_10"),
    array("title"=>"Մեզ վստահում են", "type"=>"text", "name"=>"edl_char_8"),
    array("title"=>"Բոլոր Գործընկերները", "type"=>"text", "name"=>"edl_char_9"),
);

$service = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
);

$serviceItem = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
    array("title"=>"File", "type"=>"file", "name"=>"ed_char_1"),
);

$about = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
    array("title"=>"Մեր ձեռքբերումները", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ թիվ", "type"=>"text", "name"=>"ed_char_1"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ", "type"=>"text", "name"=>"edl_char_2"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_2"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ", "type"=>"text", "name"=>"edl_char_3"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_3"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ", "type"=>"text", "name"=>"edl_char_4"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ թիվ", "type"=>"text", "name"=>"ed_char_4"),
    array("title"=>"Մեր թիմը", "type"=>"text", "name"=>"edl_char_5"),
    array("title"=>"Մեր թիմը Text", "type"=>"textarea", "name"=>"edl_text_2","isRichText"=>false),
);

$content = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
);
?>
<?php
$templates = array(
    array("id"=>"Home", "title"=>"Գլխավոր էջ", "fields"=>$home, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"About", "title"=>"Մեր մասին", "fields"=>$about, "hasGallery"=>true, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Service", "title"=>"ԳՈՐԾԱՌՈՒՅԹՆԵՐԸ", "fields"=>$service, "hasGallery"=>true, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Content", "title"=>"Կրկնվոք Ինֆորմացիա", "fields"=>$content, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
);
?>
