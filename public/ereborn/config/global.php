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
        CONTACT => "entity_id DESC",
	);

	$disableAddButtonIn = array();

	$disableImagesIn = array();

	$disableSubsectionsIn = array();

	$customDateFields = array(

	);

	$customDateTitles = array(

	);

    $wordsMap = array(
        CONTENT => array(
            "Մեր Մասին",
            "Գործառույթներ",
            "Գնային քաղաքականություն",
            "Գործընկերներ",
            "Կապ",
            "Մանրամասն",
            "Ցանկանում եք՞ Համագործակցել",
            "Դիմեք մեզ հետադարձ կապի միջոցով",
            "ԱՆՈՒՆ ԱԶԳԱՆՈՒՆ",
            "ԷԼ․ ՀԱՍՑԵ",
            "ՀԱՂՈՐԴԱԳՐՈՒԹՅՈՒՆ",
            "ուղարկել հաղորդագրություն",
            "ԲԱԺԻՆՆԵՐ",
            "ԿՈՆՏԱԿՏՆԵՐ",
            "1 Հեռախոսահամար",
            "2 Հեռախոսահամար",
            "Էլ Հասցե",
            "Լոկացիյա (Location)",
            "Facebook",
            "Instagram",
            "Linkedin",
            "Մաքսային հսկողության փասթաթղթեր",
            "Բեռնատար",
            "Մաքսային սահմանային կետ",
            "Տարանցիկ հայտարարագիր",
            "Մաքսային պահեստ",
            "Ներմուծող կազմակերպություն",
            "Մաքսային ձևակերպումների թույլտվություն",
            "Ապրանքային հայտարարագիր",
            "Մաքսային վճարումների ծանուցագիր",
            "Մաքսային պահեստ",
            "Վճարումները հաստատող անդորրագիր",
            "ՀԵՌԱԽՈՍԱՀԱՄԱՐ",
            "Հասցե",
            "ՇՆՈՐՀԱԿԱԼՈՒԹՅՈՒՆ!",
            "Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է",
            "Blog",
            "Հաճախ տրվող հարցեր",
            "Գաղտնիության քաղաքականություն"
        )
    );

	$templateMap = array(
		0 => array("Content", "Home", "About", "Service", "Blog",
            "PricePolicy","Partners","Contact","FaqPage","PrivacyPolicy")
	);

	$widgetWhiteList = array("Blog");

	$additionalColumnsInSections = array(
		0=>array("entity_removable"=>"Removable"),
	);

	$additionalColumnsInWidgets = array(/*"ed_number_1"=>"Թիվ 1"*/);

	$templateChildren = array(
        "Partners" => ["Partner"],
        "Contact" => ["Message"],
        "FaqPage" => ["Faq"],
        "Content" => [],
        "Home" => [],
        "About" => ["Member"],
        "Service" => [],
        "PricePolicy" => [],
        "Blog" => ['BlogInner'],
        "BlogInner" => ['Text','DesignText','Video','ImageRight','ImageLeft','Title'],
	);

	$templateAdditionalColumns = array(
//		"Transactions" => ["ed_char_1" => "Finished","ed_char_2" => "Payment type"]
	);

	$templateCustormSortFields = array(
		"Contact" => "entity_creation_date DESC",
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
