<?php 
include('setting.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
<?= @$it2 ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$it2 ? '' : exit(); ?>
	<title>【技術交流】<?= @strip_tags($itTitle2) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($itDescription2) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【技術交流】<?= @strip_tags($itTitle2) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($itDescription2) ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?= @$index ?>img/logos/ares.png" />
    <meta property="fb:app_id" content="900338710010817" />
<?php include('embed/gtm.php'); ?>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<style>table{width: 100%;margin:1rem 0;}th{background-color:#8064A2;text-align:center;color:#f0f0f0;}td{background-color:#BFB1D0;}</style>
<body>
<?php include('embed/gtm-noscript.php'); ?>
<div class="loading" data-text="資通電子報"></div>
<div itemscope itemtype="http://schema.org/Article" id="all">
<?php include('embed/header.php'); ?>
	<main class="wrap essay">
		<div class="head lt">
            <ul class="list-inline">
                <li>
                    <h3>技術交流</h3>
                </li>
                <li>
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    <div style="text-align: left">
                        <div class="fb-like" data-href="<?= @$url ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                </li>
            </ul>
            <h1 itemprop="name"><?= @strip_tags($itTitle2) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$itAuthorImg2 ?>" alt="author <?= @$itAuthor2 ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$itAuthor2 ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：金屬加工、智慧智造、ciMes、MES、SCADA、RMS、品質管制、製造管理、SPC、生產管理、整合性設備監控</div><br>
            <article itemprop="articleBody">
                <p>
                    上期資通電腦電子報技術交流文章，<a href="https://marketing.ares.com.tw/dm/newsletter-2017-08-ciMes/product2">金屬加工如何邁向工業 4.0 全靠 ciMes-style！（上）</a> 當中，我們已針對建構整合式製造管理平台、生產管理服務效率化、即時化品質管理 、物料、線邊倉管理等面向，在金屬加工智慧製造管理應用規劃上，如何就製造實體生產線結合資訊平台建構的資訊流，應對出實際符合企業本身適用的智慧應用上進行探討。這期我將從以下四個面向進行相關解析： 1. 整合性設備監控 2. 製程參數智能化 3. 機台預修保養管理 4. 電子行動化作業應用。
                </p>
                <h3>整合性設備監控</h3>
                <p>
                    整合式設備監控可突破以往單機台或是單區域管理模式，以整廠為出發點，無論是在設備、生產、品質或能耗，以各工廠管理指標 KPI（Key Performance Indicators）為起點，讓管理者層層分析，找出問題的癥結點，下達正確的管理指示。
                </p>
                <blockquote>
                    <h4>整合式廠區管理強化各廠自動化資訊</h4>
                    <p>
                        整合式廠區管理在強化原有各廠自動化資訊的規畫上，資通 ciMes 會將生產過程中的原料資訊、生產批號資訊、生產參數資訊（RMS；Recipe management System）、品質管制資訊（SPC）、及其他管理性的KPI統合到整合式管理介面中，因為在現有的 SCADA 系統架構，一般廠區資訊是獨立運作無法互相連結。透過系統之設備整合模組，將各個廠區原先各自獨立的設備與製程資訊整合到系統中，整合各廠區的資訊外，更可協助管理階層全面掌握現場情報，採取最佳決策。此架構的管理目的主要從工廠管理 KPI 四大面向進行規劃，包含生產資訊、品質資訊、設備資訊、成本資訊，讓管理者透過整合式管理資訊介面，完整掌握工廠資訊。
                    </p>
                    <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_1.png" alt="資通電子報">
                        <figcaption class="tac">
                            圖五：整合式廠區管理架構
                        </figcaption>
                    </figure>
                    <h4>整合式廠區管理區分為 3 個應用面向</h4>
                    <ul class="disc">
                        <li>
                            集中式整合管理資訊<br>
                            集中式整合管理資訊規畫主要是將各廠生產設備及結合在制相關資訊等關鍵性管理指標，在集中式整合管理介面中就可以一目了然。
                        </li>
                        <li>
                            集中式監控管理<br>
                            整合各廠既有的設備控制功能，集中在整合式廠區管理平台下。
                        </li>
                        <li>
                            關鍵性管理資訊<br>
                            集中式整合管理資訊的細部延伸，提供詳細的整合式資訊內容，若想詳細瞭解細部內容，就可透過這個功能的規劃做細部內容的瞭解，當然也包含整合既有生產設備及廠區監控管理的功能。
                        </li>
                    </ul>
                    <p>
                        以廠區設備狀態為例，當稼動資訊出現異常時，可經由該資訊進入分析，檢視造成異常的區域，再進一步檢視是哪台設備所造成的問題；當然，具備權限人員可以直接從機台或各元的角度，操作該元件的狀態達到即時控制的效果。同理，在品質、能耗或生產進度上，皆能以相同的模式快速找到問題與原因，全面提升管理階層在生產管理上的效率。
                    </p>
                    <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_2.png" alt="資通電子報">
                        <figcaption class="tac">
                            圖六：整合式設備應用情境
                        </figcaption>
                    </figure>
                    <h4>物聯網嵌入應用實現 M to M 應用</h4>
                    <p>
                        在整合式廠區管理架構下，作業層的各生產設備與感知裝置可透過各自設備的 DCS（Data Collection System；資料收集系統）、PLC（Programmable Controller；可程式控制器）或其他終端資料收集裝置，將資料彙整至 MES 資料庫中。加以分析運算後，再回饋給其他控制裝置，讓各設備藉此互相串聯，交換訊息，並且結合 RMS 系統於 Auto Dispatch 功能的導入，補強原有自動化設備管理性功能的不足，達到 M to M 的應用。
                    </p>
                </blockquote>
                <h3>製程參數智能化</h3>
                <p>
                    製成參數／配方管理（RMS）在自動化生產過程中，讓生產從自動化提升到智動化是相當重要的核心系統。現有自動化生產設備透過 DCS 即時的將生產過程中的生產參數或配方收集回系統，但傳統設備監控與自動化控制並沒有將設備生產參數與原料、生產批、生產條件、品質資訊等資料勾稽並積累分析，回饋修正最佳生產條件或配方／參數。資通 ciMes RMS 主要補強自動化設備資訊收集監控外的配方管理功能，重點在於透過資料的積累、影響製程能力及品質的變異因數，藉由大資料平台及分析回饋的機制，有效提升制程與品質能力。
                </p>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                        <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_3.png" alt="資通電子報">
                    <figcaption class="tac">
                        圖七：整合式智動化感測情境。
                    </figcaption>
                </figure>
                <h3>機台預修保養管理</h3>
                <p>
                    預修保養模組（Preventive Maintenance）主要提供機台預修保養提示，並保留保養相關檔與紀錄。傳統的養計畫可分為兩大類，定時保養與計次保養，定時保養是固定時間週期保養如周保養、月保養、季保養等等，計次保養則是固定使用次數後的保養，例如刀具或模具、工具使用幾次後必須做保養。但進階的設備保養管理需要構建預測性及預防性的保養規劃，更有效提升設備稼動能力。
                </p>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                        <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_4.jpg" alt="資通電子報">
                    <figcaption class="tac">
                        圖八：設備故障偵測應用情境。
                    </figcaption>
                </figure>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                        <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_5.png" alt="資通電子報">
                    <figcaption class="tac">
                        圖九：預測性設備保養應用情境。
                    </figcaption>
                </figure>
                <h3>電子行動化作業</h3>
                <p>
                    不論作業現場的資料收集或是決策主管決策資訊，可規劃現有的行動裝置，隨時隨地掌握相關資訊。
                </p>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                        <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_cimes_6.png" alt="資通電子報">
                    <figcaption class="tac">
                        圖十：行動化應用情境。
                    </figcaption>
                </figure>
                <p>
                    智慧製造因應企業本身的生產管理特性，具體的規劃上應該著重在創建最適合企業本身使用的系統。因此，不用追逐各種智慧化應用帶來的迷思，針對企業製造管理瓶頸或優化上的管理與建構，才是真正的將資訊力轉化成智慧力，進而有效提升製造力、強化公司競爭力！
                </p>
                <!-- <blockquote>縮排</blockquote>
                <h3>標題</h3>
                <ul class="disc">
                    <li>sadfds</li>
                    <li>dsfa</li>
                    <li>adsfasdf</li>
                    <li>adfads</li>
                    <ol class="decimal">
                        <li>sadfds</li>
                        <li>dsfa</li>
                        <li>adsfasdf</li>
                        <li>adfads</li>
                    </ol>
                    </li>
                </ul> -->
            </article>
            <aside class="gray-bg tac blue2-color">
                想瞭解更多資通 ciMes 製造執行系統，如何協助企業建構整合式製造管理平台嗎？
                <br>
                ★詳細產品資訊請洽 <a href="https://cimes.ares.com.tw/contactus/">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02 -2522-1351 Ext. 301
            </aside>
        </section>
	</main>
</div>
<?php include('embed/footer.php'); ?>
<script src="js/add_link.js"></script>
<script src="js/main.js"></script>
<script>
$('section img').each(function(){
    $(this).on("error", function(){
        $(this).attr('src', 'https://api.fnkr.net/testimg/270x154/4479bc/FFF/?text=image+error');
    });
})
$(function(){
    // $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '技術交流';}).closest('li').addClass('active')
    $('nav li a:contains("技術交流")').closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>