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
    array("title"=>"Մեր թիմը", "type"=>"text", "name"=>"edl_char_11"),
    array("title"=>"Բոլոր թիմակիցները", "type"=>"text", "name"=>"edl_char_12"),
    array("title"=>"ԱՆՎՃԱՐ ԽՈՐՀՐԴԱՏՎՈՒԹՅՈՒՆ", "type"=>"text", "name"=>"edl_char_13"),
    array("title"=>"Գրեք մեզ ցանկացած հարցով, մեր մասնագետները սիրով կօգնեն ձեզ", "type"=>"text", "name"=>"edl_char_14"),
);

$service = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>true),
    array("title"=>"Գործնական պրոցես", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"Գործնական պրոցես 1", "type"=>"textarea", "name"=>"edl_text_2","isRichText"=>false),
    array("title"=>"Գործնական պրոցես 2", "type"=>"textarea", "name"=>"edl_text_3","isRichText"=>false),
    array("title"=>"Գործնական պրոցես 3", "type"=>"textarea", "name"=>"edl_text_4","isRichText"=>false),
    array("title"=>"Գործնական պրոցես 4", "type"=>"textarea", "name"=>"edl_text_5","isRichText"=>false),
    array("title"=>"Գործնական պրոցես 5", "type"=>"textarea", "name"=>"edl_text_6","isRichText"=>false),
    array("title"=>"1 ՓՈՒԼ", "type"=>"text", "name"=>"edl_char_2"),
    array("title"=>"2 ՓՈՒԼ", "type"=>"text", "name"=>"edl_char_3"),
    array("title"=>"3 ՓՈՒԼ", "type"=>"text", "name"=>"edl_char_4"),
    array("title"=>"4 ՓՈՒԼ", "type"=>"text", "name"=>"edl_char_5"),
    array("title"=>"Ցանկանում եք Համագործակցե՞լ Գրեք Մեզ", "type"=>"text", "name"=>"edl_char_6"),
    array("title"=>"ՈՒՂԱՐԿԵԼ ՆԱՄԱԿ", "type"=>"text", "name"=>"edl_char_7"),
);

$about = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>true),
    array("title"=>"Մեր ձեռքբերումները", "type"=>"text", "name"=>"edl_char_6"),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"ՏԱՐԻ ՇՈՒԿԱՅՈՒՄ թիվ", "type"=>"text", "name"=>"ed_char_1"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ", "type"=>"text", "name"=>"edl_char_2"),
    array("title"=>"ԳՈՐԾԸՆԿԵՐՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_2"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ", "type"=>"text", "name"=>"edl_char_3"),
    array("title"=>"ԹԻՄԻ ԱՆԴԱՄՆԵՐ թիվ", "type"=>"text", "name"=>"ed_char_3"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ", "type"=>"text", "name"=>"edl_char_4"),
    array("title"=>"ԿԱՏԱՐՎԱԾ ԳՈՐԾԱՐՔ թիվ", "type"=>"text", "name"=>"ed_char_4"),
    array("title"=>"Մեր աշխատանքը", "type"=>"text", "name"=>"edl_char_5"),
    array("title"=>"Մի փոքր մեր առօրյայից", "type"=>"textarea", "name"=>"edl_text_2","isRichText"=>false),
    array("title"=>"Մեր թիմը", "type"=>"text", "name"=>"edl_char_7"),
    array("title"=>"Մեր թիմը Text", "type"=>"textarea", "name"=>"edl_text_3","isRichText"=>false),
);

$partners = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
);
$partner = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Title", "type"=>"file", "name"=>"ed_image"),
);

$pricePolicy = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>true),
    array("title"=>"Պարտադիր", "type"=>"text", "name"=>"edl_char_1"),
    array("title"=>"Պարտադիր Text", "type"=>"textarea", "name"=>"edl_text_2","isRichText"=>false),
    array("title"=>"Ցանկալի", "type"=>"text", "name"=>"edl_char_2"),
    array("title"=>"Ցանկալի Text", "type"=>"textarea", "name"=>"edl_text_3","isRichText"=>false),

);

$contacts = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
);

$message = array(
    array("title"=>"ԱՆՈՒՆ ԱԶԳԱՆՈՒՆ", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"ՀԵՌԱԽՈՍԱՀԱՄԱՐ", "type"=>"text", "name"=>"ed_char_1"),
    array("title"=>"ԷԼ․ ՀԱՍՑԵ", "type"=>"text", "name"=>"ed_char_2"),
    array("title"=>"ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆ", "type"=>"textarea", "name"=>"ed_text_1","isRichText"=>false),
);

$content = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
);
$blog = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
);
$blogInner = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Image", "type"=>"image", "name"=>"ed_image"),
    array("title"=>"Date", "type"=>"date", "name"=>"ed_datetime_1"),
    array("title"=>"Minute", "type"=>"text", "name"=>"ed_char_1"),

);

$faqPage = array(
    array("title"=>"Title", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
);

$faq = array(
    array("title"=>"Question", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>false),
);
$privacyPolicy = array(
    array("title"=>"Privacy Policy", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Text", "type"=>"textarea", "name"=>"edl_text_1","isRichText"=>true),
);
$member = array(
    array("title"=>"Name", "type"=>"text", "name"=>"edl_title"),
    array("title"=>"Image", "type"=>"image", "name"=>"ed_image"),
    array("title"=>"Position", "type"=>"text", "name"=>"edl_char_1"),
);

$text = array(
    array("title"=>"Տեքստ", "type"=>"textarea", "name"=>"edl_text_1", "isRichText"=>true),
);
$title = array(
    array("title"=>"Տեքստ", "type"=>"text", "name"=>"edl_title"),
);
$imageRight = array(
    array("title"=>"Տեքստ", "type"=>"textarea", "name"=>"edl_text_1", "isRichText"=>true),
    array("title"=>"Image", "type"=>"image", "name"=>"ed_image"),
);
$imageLeft = array(
    array("title"=>"Տեքստ", "type"=>"textarea", "name"=>"edl_text_1", "isRichText"=>true),
    array("title"=>"Image", "type"=>"image", "name"=>"ed_image"),
);
$designText = array(
    array("title"=>"Տեքստ", "type"=>"textarea", "name"=>"edl_text_1", "isRichText"=>false),
);
$video = array(
    array("title"=>"youtube Նկար", "type"=>"image", "name"=>"ed_image"),
    array("title"=>"youtube", "type"=>"textarea", "name"=>"ed_text_1", "isRichText"=>false),
);



?>
<?php
$templates = array(
    array("id"=>"Home", "title"=>"Գլխավոր էջ", "fields"=>$home, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"About", "title"=>"Մեր մասին", "fields"=>$about, "hasGallery"=>true, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Member", "title"=>"Մեր մասին", "fields"=>$member, "hasGallery"=>true, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Service", "title"=>"ԳՈՐԾԱՌՈՒՅԹՆԵՐԸ", "fields"=>$service, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"PricePolicy", "title"=>"Գնային Քաղաքականույթուն", "fields"=>$pricePolicy, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Partners", "title"=>"Գործընկերներ", "fields"=>$partners, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Partner", "title"=>"Գործընկեր", "fields"=>$partner, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Contact", "title"=>"Կապ", "fields"=>$contacts, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"FaqPage", "title"=>"Հարցեր", "fields"=>$faqPage, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Faq", "title"=>"Հարց", "fields"=>$faq, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"PrivacyPolicy", "title"=>"Գաղտնիության քաղաքականություն", "fields"=>$privacyPolicy, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Message", "title"=>"Հաղորդագրություն", "fields"=>$message, "hasGallery"=>false, "hasSeo"=>false, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Content", "title"=>"Ինֆորմացիա", "fields"=>$content, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"Blog", "title"=>"Blog", "fields"=>$blog, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),
    array("id"=>"BlogInner", "title"=>"BlogInner", "fields"=>$blogInner, "hasGallery"=>false, "hasSeo"=>true, "hasWidget"=>true, "isWidget"=>false),


    //-------------------------------Widget templates here--------------------------------//
    array("id"=>"Text", "title"=>"Տեքստ", "fields"=>$text, "hasGallery"=>false, "hasSeo"=>false, "isWidget"=>true),
    array("id"=>"Title", "title"=>"Վերնագիր", "fields"=>$title, "hasGallery"=>false, "hasSeo"=>false, "isWidget"=>true),
    array("id"=>"DesignText", "title"=>"Դիզայն Տեքստ", "fields"=>$designText, "hasGallery"=>false, "hasSeo"=>false, "isWidget"=>true),
    array("id"=>"Video", "title"=>"Video", "fields"=>$video, "hasGallery"=>true, "hasSeo"=>false, "isWidget"=>true),
    array("id"=>"ImageRight", "title"=>"ImageRight", "fields"=>$imageRight, "hasGallery"=>true, "hasSeo"=>false, "isWidget"=>true),
    array("id"=>"ImageLeft", "title"=>"ImageLeft", "fields"=>$imageLeft, "hasGallery"=>true, "hasSeo"=>false, "isWidget"=>true),
);
?>
