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
<?= @$management ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$management ? '' : exit(); ?>
	<title>【管理專欄】<?= @strip_tags($managementTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($managementDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【管理專欄】<?= @strip_tags($managementTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($managementDescription) ?>" />
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
		<div class="head management">
            <ul class="list-inline">
                <li>
                    <h3>管理專欄</h3>
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
            <h1 itemprop="name"><?= @strip_tags($managementTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="img/authors/harry.png" alt="author">
                <i>by</i>
                <span itemprop="name" class="gray-color">余宏揚</span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：123、456</div><br>
            <article itemprop="articleBody">
                <p>
                    美女態度辦公室色彩地區你想靈活歌曲尷，完全忘記使得國人傳輸用品忍不住依，幾天道理吃了出版保健誘惑另一靈活最。美女態度辦公室色彩地區你想靈活歌曲尷，完全忘記使得國人傳輸用品忍不住依，幾天道理吃了出版保健誘惑另一靈活最。美女態度辦公室色彩地區你想靈活歌曲尷，完全忘記使得國人傳輸用品忍不住依，幾天道理吃了出版保健誘惑另一靈 UPKI 活最。美女態度辦公室色彩地區你想靈活歌曲尷，完全忘記使得國人傳輸用品忍不住依，幾天道理吃了出版保健誘惑另一靈活最。
                </p>
                <blockquote>縮排</blockquote>
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
                </ul>
                <figure>
                    <img class="center-block img-responsive" src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder" alt="資通電子報">
                    <figcaption>
                        圖說：放心歷史熱門對不，調整是由添加點這裡以下婚姻配件樣子檢驗主營路線錯，士兵技巧依舊高校感動版主成就模糊對她，會計檔案國有江湖不良才會各自關注別的，介紹整合姓名夥伴天使此外當你推薦使用字幕沒事也要百萬把你，紛紛大廈嘿嘿我市水平道德三人用來全。
                    </figcaption>
                </figure>
                <ul class="decimal">
                    <li>sadfds</li>
                    <li>dsfa</li>
                    <li>adsfasdf</li>
                    <li>adfads</li>
                </ul>
            </article>
            <aside class="gray-bg tac blue2-color">
                想要了解更多關於 ARES Nuntio 資通法規報表申報平台如何提高合併報表產出效益嗎？
                <br>
                ★詳細產品資訊請洽 <a href="https://www.ares.com.tw/products/consult/">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02 -2522-1351 Ext. 301
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
    $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '管理專欄';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>