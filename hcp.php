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
<?= @$hcp ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$hcp ? '' : exit(); ?>
	<title>【HCP 專欄】<?= @strip_tags($hcpTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($hcpDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【HCP 專欄】<?= @strip_tags($hcpTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($hcpDescription) ?>" />
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
                    <h3>HCP 專欄</h3>
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
            <h1 itemprop="name"><?= @strip_tags($hcpTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$hcpAuthorImg ?>" alt="author <?= @$hcpAuthor ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$hcpAuthor ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：薪資條、電子薪資條、HR 系統、薪資保密、薪資加密、薪資密封袋</div><br>
            <article itemprop="articleBody">
                <p>
                    已經厭倦每個月都要發送紙本薪資條嗎？不但浪費紙張亦需耗費人力遞送。或者，雖然 HR 系統會自動發送電子薪資條，但是卻擔心員工薪資是否會因此外洩？資通電腦 HCP（Human Capital Planner；人力資產規劃系統）擁有電子薪資條解決方案，可以協助企業運用 Email、網頁、APP 行動化方式，提供給員工薪資發放的通知與明細。不僅大幅節省財務部門的人力與時間，更提升薪資資訊保密性、降低人工錯誤，提供員工最新的即時資訊。
                </p>
                <p>
                    您可以有更好的解決方案
                </p>
                <h3>電子薪資條加密防護滴水不漏</h3>
                <ul class="disc">
                    <li>端點加密解密，密碼不外洩</li>
                    <li>解加密運算於 RAM 計算，不儲存於本機</li>
                    <li>傳輸過程中全程加密</li>
                    <li>資料庫儲存皆為密文</li>
                    <li>IT 人員亦看不到員工薪水</li>
                </ul>
                <figure>
                    <img src="images/img_article_hcp_1.png" alt="圖一、電子薪資條系統架構" class="img-responsive center-block">
                    <figcaption class="tac">圖一、電子薪資條系統架構</figcaption>
                </figure>
                <h3>產品特點</h3>
                <ul class="disc">
                    <li>不限制 HR 產品，皆可整合發送加密薪資條</li>
                    <li>於 HR 系統匯出薪資及加密，至員工電腦才解密，確保傳輸過程不外洩</li>
                    <li>員工可設定密碼或憑證（自然人憑證、金融憑證）加解密薪資</li>
                    <li>同時支援 Web 及行動化介面</li>
                </ul>
                <figure>
                    <img src="images/img_article_hcp_2.png" alt="圖二、透過驗證碼確認，薪資訊息防護更有保障" class="img-responsive center-block">
                    <figcaption class="tac">圖二、透過驗證碼確認，薪資訊息防護更有保障</figcaption>
                </figure>
                <figure>
                    <img src="images/img_article_hcp_3.png" alt="圖三、從手機也能輕鬆安全的獲取薪資資訊" class="img-responsive center-block">
                    <figcaption class="tac">圖三、從手機也能輕鬆安全的獲取薪資資訊</figcaption>
                </figure>
                <p>
                    資通電腦 HCP 電子薪資條解決方案，不僅能協助企業達到省時、省力、環保的訴求，更可兼顧員工薪資安全保密，讓客戶在營運管理上更加得心應手！
                </p>
                <!-- <ul class="disc">
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
                想瞭解更多資通 HCP 電子薪資條解決方案，如何協助企業輕鬆提升營運效率嗎？
                <br>
                ★詳細產品資訊請洽 <a href="https://hcp.ares.com.tw/about/consult/">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02 -2522-1351 Ext. 301
            </aside>
        </section>
	</main>
</div>
<?php include('embed/footer.php'); ?>
<script src="js/add_link.js"></script>
<script src="js/main.js"></script>
<script>
$(function(){
    // $('nav li a').filter(function(){ return $(this).text().toLowerCase() === 'HCP 專欄';}).closest('li').addClass('active')
    $('nav li a:contains("HCP 專欄")').closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
$('section img').each(function(){
    $(this).on("error", function(){
        $(this).attr('src', 'https://api.fnkr.net/testimg/270x154/4479bc/FFF/?text=image+error');
    });
})
</script>
</body>
</html>