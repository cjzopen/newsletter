<?php
//最後更新時間 (GTM = 中原標準時間減 8小時)
$sLastModified = "Fri, 15 Sep 2017 01:38:00 GMT";
header("Last-Modified: {$sLastModified}");

//og:image 要絕對網址之用
$index = 'https://newsletter-2017-09/';

// 當前網址 - fb like 之用途
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$date = '2017.09';
//title 若有<br>，請在 < 前面空一格
$title = '社群行銷新思維';
$description = '據觀察近年為強化與民眾互動據觀察近年為強化與民眾互動據觀察近年為強化與民眾互動據觀察近年為強化與民眾互動據觀察近年為強化與民眾互動。';
$author = '林';
$authorImg = 'img/authors/sendy.png';

// 搶先 e 報 ; author summary 擇一
$e=array(
	array(
		'img' => 'images/img_index_e_1.jpg',
		'link' => 'https://',
		'title' => '祝您中秋節快樂！',
		'author' => '行銷部',
		'authorImg' => 'img/authors/marketing.png'
	)
	,array(
		'img' => 'images/img_index_e_2.png',
		'link' => 'https://',
		'title' => '你知道嗎？台灣資料外洩排名全球第 5 名，位居亞洲榜首！',
		'summary' => '快來進行資料加密與防護需求檢視！'
	)
	,array(
		'img' => 'images/img_index_e_3.jpg',
		'link' => 'https://www.ares.com.tw/events/egui-userstory-guc',
		'title' => 'IC 設計領導商創意電子導入資通 eGUI 電子發票系統引領業界跟風',
		'summary' => '為因應台灣國稅局電子發票導入需求，以及電子發票法規遵循勢在必行。創意電子急需一套具備完整進銷項電子發票交換功能，因此導入適用於 B2B 作業需求的資通電腦 eGUI 電子發票管理資訊系統。'
	)
	,array(
		'img' => 'images/img_index_e_4.jpg',
		'link' => 'https://www.ares.com.tw/events/cimes-contract-hosong',
		'title' => '世界級機械零件商和頌企業<br>導入資通電腦 ciMes 迎向工業 4.0',
		'summary' => '資通電腦 ciMes 產品總監曾文光表示，ciMes 能協助和頌之工廠從工單、生產、設備管理、保養、品質管制，到進出貨等整合，搭配人、事、時、地、物，做分析回饋，達到即時化、透明化與資訊化精實管理，邁向工業 4.0 新時代。'
	)
	,array(
		'img' => 'images/img_index_e_5.jpg',
		'link' => 'https://www.ares.com.tw/events/argoerp-userstory-sunopto-part1',
		'title' => '尚鈦光電導入資通電腦 ArgoERP <br>結帳簽核效率倍增（上）',
		'summary' => '回顧導入 ArgoERP 時的情景，莊映輝總經理面帶微笑地說到：資通專業的顧問服務團隊相當地主動積極關心客戶的情況和需求，負責的態度讓我們很滿意。在導入過程中，陳顧問更是非常認真，不論是安裝或指導，他總是很有耐心的協助我們解決所有問題。'
	)
	,array(
		'img' => 'images/img_index_e_6.jpg',
		'link' => 'https://www.ares.com.tw/events/argoerp-userstory-sunopto-part2',
		'title' => '尚鈦光電導入資通電腦 ArgoERP <br>結帳簽核效率倍增（下）',
		'summary' => 'ArgoERP 不僅將進銷存、財務資訊整合在同一平台作業，幫助流程更透明化、即時化。統一的管理系統輕鬆精準呈現過去的數據資料或各部門即時資訊，不僅能夠大幅降低了資料蒐集、比對、分析的時間，更能有效加速主管評估與決策的時間，提升企業營運績效。'
	)
	,array(
		'img' => 'images/img_index_e_7.jpg',
		'link' => 'https://www.ares.com.tw/events/Oracle-Workshop-201708',
		'title' => '大數據浪潮來襲 資通電腦舉辦 Oracle 講座助用戶邁向智能企業',
		'summary' => '大數據（Big Data）時代來臨，從製造業、零售業、服務業等產業均紛紛著手建置商業智慧（Business Intelligence，簡稱 BI）平台，而美商甲骨文（Oracle）推出的商業智能模組更是組織走向智慧營運的一大助力。'
	)
	,array(
		'img' => 'images/img_index_e_8.jpg',
		'link' => 'https://www.ares.com.tw/events/ares-jobs-engineer-201708',
		'title' => '職場經驗談：不只 Do right things 資通委外團隊 3 秘訣使命必達',
		'summary' => '執行委外專案時，最終目的就是要達到客戶需求，有時也會遇到不可預期的情況需要解決。因此，如何確實掌握各專案的目的精髓，及擁有跟水一樣適應容器的應變力更為重要，也是專案是否能順利執行的關鍵。'
	)
);
// img/authors/marketing.png
$product = true;
$productTitle = '建立終身學習護照 <br>完整學習歷程一把罩';
$productDescription = '終身學習護照需整合職能分析，依據職能及人員狀況盤點所需課程安排，並提供檢核訓練成果整合，彙整績效考評，以提供完整學習歷程循環。';
$productAuthor = 'Vita';
$productAuthorImg = 'img/authors/vita.png';

$product2 = true;
$productTitle2 = '金屬加工如何邁向工業 4.0 <br>全靠 ciMes-style！（下）';
$productDescription2 = '資通電子報 產品特寫 '.$productTitle2;
$productAuthor2 = 'Jacky';
$productAuthorImg2 = 'img/authors/jacky.png';

$it = true;
$itTitle = '如何提升系統軟體品質？淺談 SoapUI:Web Service 單元測試工具';
$itDescription = '資通電子報 技術交流 '.$itTitle;
$itAuthor = '蔡尚明';
$itAuthorImg = 'img/authors/david.png';

$it2 = false;
$itTitle2 = '';
$itDescription2 = '資通電子報 技術交流 '.$itTitle2;
$itAuthor2 = 'Jacky';
$itAuthorImg2 = 'img/authors/jacky.png';

$doctor = true;
$doctorTitle = '行動 App 文件套印 <br>業務接單快速搞定';
$doctorDescription = '資通電子報 ERP 達人專欄 '.$doctorTitle;
$doctorAuthor = 'Morris';
$doctorAuthorImg = 'img/authors/henry.png';
// img/authors/henry.png

$hcp = true; //boolean:exist or not
$hcpTitle = 'HCP 電子薪資條嚴謹加密 <br>員工薪資防護滴水不漏';
$hcpDescription = '已經厭倦每個月都要發送紙本薪資條嗎？不但浪費紙張亦需耗費人力遞送。或者，雖然 HR 系統會自動發送電子薪資條，但是卻擔心員工薪資是否會因此外洩？';
$hcpAuthor = 'Vita';
$hcpAuthorImg = 'img/authors/vita.png';

$hcp2 = false; //boolean:exist or not
$hcpTitle2 = 'HCP';
$hcpDescription2 = '';
$hcpAuthor2 = 'Sherry';
$hcpAuthorImg2 = 'img/authors/sherry.png';

//菁英專欄
$job = false; //boolean:exist or not
$jobTitle = '職場經驗談：複雜的程式中 找尋最平淡的精彩';
$jobDescription = '職場經驗談';
$jobAuthor = '行銷部';
$jobAuthorImg = 'img/authors/marketing.png';

//菁英招募
$job2 = false; //boolean:exist or not
$jobTitle2 = '"徵"的就是你！Java 程式設計師';
$jobLink2 = 'http://bit.ly/2t8EIpS';

//管理專欄
$management = false; //boolean:exist or not
$managementTitle = 'managementTitle';
$managementDescription = $managementTitle.$description;

//漫畫資通
$cartoonTitle = '政府機關網站輕鬆搞定！';
$cartoonDescription = $cartoonTitle.$description;


//資訊補給站
$info=array(
	array(
		'img' => 'img/logos/appledaily-real.jpg',
		'link' => 'http://bit.ly/2vNSH7x',
		'title' => '一例一休列首要之務<br>施俊吉：會讓工時計算有彈性'
	)
	,array(
		'img' => 'img/logos/ettoday.png',
		'link' => 'http://bit.ly/2wICEGI',
		'title' => '台鐵 13 站減人力 牡丹、大溪 9/1 起「不派人」率先改成無人站'
	)
	,array(
		'img' => 'img/logos/cc.png',
		'link' => 'http://bit.ly/2gICHZP',
		'title' => "Let's do Starbucks. 是什麼意思"
	)
);
?>
