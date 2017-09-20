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
	<title>【漫畫資通】<?= @strip_tags($cartoonTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($cartoonDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【漫畫資通】<?= @strip_tags($cartoonTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($cartoonDescription) ?>" />
    <meta property="og:type" content="article" />
    <!-- <meta property="og:image" content="images/og/cartoon.jpg" /> -->
    <meta property="og:image" content="<?= @$index ?>images/og/cartoon.jpg" />
    <meta property="fb:app_id" content="900338710010817" />
<?php include('embed/gtm.php'); ?>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<style>section article figure{max-width:none}</style>
<body>
<?php include('embed/gtm-noscript.php'); ?>
<div class="loading" data-text="資通電子報"></div>
<div id="all">
<?php include('embed/header.php'); ?>
	<main class="wrap essay">
		<div class="head cartoon">
            <ul class="list-inline">
                <li>
                    <h3>漫畫資通</h3>
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
            <h1><?= @strip_tags($cartoonTitle) ?></h1>
            <div class="author">
                <img src="img/authors/marketing.png" alt="author">
                <i>by</i>
                <span class="gray-color">行銷部</span>
            </div>
        </div>
        <section>
            <!-- <div class="blue2-color">關鍵字：123、456</div><br> -->
            <article>
                <figure class="container-fluid">
                    <div class="text-center" style="font-size: 0">
                        <div class="ib" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="img-responsive" src="images/img_article_cartoon_1.jpg" alt="資通電腦電子報、漫畫">
                        </div>
                        <div class="ib" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="img-responsive" src="images/img_article_cartoon_2.jpg" alt="資通電腦電子報、漫畫">
                        </div>
                        <div class="ib" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="img-responsive" src="images/img_article_cartoon_3.jpg" alt="資通電腦電子報、漫畫">
                        </div>
                        <div class="ib" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" class="img-responsive" src="images/img_article_cartoon_4.jpg" alt="資通電腦電子報、漫畫">
                        </div>
                    </div>
                </figure>
            </article>
            <aside class="gray-bg tac blue2-color">
                想瞭解更多資通政府專案服務嗎？
                <br>
                ★請洽 <a href="https://www.ares.com.tw/services/gov/consult/">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02-2522-1351 Ext. 301
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
    $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '漫畫資通';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>