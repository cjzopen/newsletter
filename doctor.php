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
	<title>【ERP 達人】<?= @strip_tags($doctorTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($doctorDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【ERP 達人】<?= @strip_tags($doctorTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($doctorDescription) ?>" />
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
<body>
<?php include('embed/gtm-noscript.php'); ?>
<div class="loading" data-text="資通電子報"></div>
<div itemscope itemtype="http://schema.org/Article" id="all">
<?php include('embed/header.php'); ?>
	<main class="wrap essay">
		<div class="head erp">
            <ul class="list-inline">
                <li>
                    <h3>ERP 達人</h3>
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
            <h1 itemprop="name"><?= @strip_tags($doctorTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$doctorAuthorImg ?>" alt="author <?= @$doctorAuthor ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$doctorAuthor ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：ArgoERP、ERP、e 化、行動 App、行動應用、行動化、文件套印</div><br>
            <article itemprop="articleBody">
                <p>
                    一份文件，從空白到資料套印完成，需要多少前置工作呢？
                </p>
                <p>
                    從系統層面來說，要先決定套印目的，再來要定義各個文件的內容、每一個輸入欄位及對應系統的意義與文字呈現的格式大小顏色及 X 軸 Y 軸，如果套印的內容包含圖檔，那還必須加上該位置套印的長度寬度，這樣一份可以完整套印的資料，才算完成所謂的資訊 e 化。雖然這個技術在電腦系統普及的現今已十分常見，但如果應用到行動裝置上呢？ 資通電腦 ArgoERP（Argo Enterprise Resource Planning；企業資源規劃系統）不斷地在行動裝置上積極創新運用及開發，除了提供文件套印功能外，更希望能帶給客戶最即時的資訊流，在前端、在外點可以更有效率的掌握公司動向。
                </p>
                <p>
                    現在人手一支行動裝置，將系統運用到行動裝置上，追求的就是即時性與便利性，雖然行動裝置不如系統那樣方便處理大量資料，但在處理核心資料上卻很迅速。這樣的情況最容易反應在外點值勤員工身上，外勤需要即時的資訊，也需要快速地回饋處理情形，而站在公司立場，除了需即時掌握員工動向，也希望得到最快速且有價值的資訊。
                </p>
                <p>
                    而套印系統在行動裝置的應用哪些呢？舉例來說，保險業務就能將資料在行動裝置上輸入，透過文件套印後，再印出紙本文件送審。除了紙本文件外，電子簽名也是一種應用方式，電子行動裝置可以將簽名直接轉為圖檔，並將圖檔套印在文件上。行動裝置更可拍照及掃描條碼，當下所處理的資料也能馬上上傳到公司系統，而急需紙本文件時，還可以透過便利商店多媒體機台（Multiple Media Kiosk；MMK）直接列印，客戶需要的資料也能透過行動裝置 Email 直接發送。許多案件的處理幾乎就是在跟時間賽跑，此行動裝置的應用，能在即時便利的基礎下，協助企業加速案件成立並提升客戶服務效率。
                </p>
                <p>
                    此次說明行動裝置文件套印功能，只是 ArgoERP 行動應用功能其中的一個小環節，行動裝置仍有許多實用性、前瞻性的開發價值，且將來前景一片看好，資通電腦將持續致力於行動裝置的發展，並期望在未來能帶給客戶更好的體驗！
                </p>
                <!-- <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" class="center-block img-responsive" src="images/img_article_doctor_1.png" alt="資通電子報">
                    <figcaption class="tac center-block">
                        圖說：ArgoERP 12C 登入畫面。以 Oracle Database 為基礎的 ArgoERP 已因應 Oracle 12c 的效能強化，提供更彈性、友善的功能。
                    </figcaption>
                </figure> -->
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
                想瞭解 ArgoERP 企業資源規劃系統，有哪些行動應用貼心功能？
                <br>
                ★詳細產品資訊請洽 <a href="https://argoerp.ares.com.tw/contact">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02 -2522-1351 Ext. 301
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
    $('nav li a:contains("ERP 達人")').closest('li').addClass('active')
    // $('nav li a').filter(function(){ return $(this).text().toLowerCase() === 'ERP 達人';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>