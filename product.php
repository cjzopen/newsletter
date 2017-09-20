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
<?= @$product ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$product ? '' : exit(); ?>
	<title>【產品特寫】<?= @strip_tags($productTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($productDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【產品特寫】<?= @strip_tags($productTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($productDescription) ?>" />
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
		<div class="head product">
            <ul class="list-inline">
                <li>
                    <h3>產品特寫</h3>
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
            <h1 itemprop="name"><?= @strip_tags($productTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$productAuthorImg ?>" alt="author <?= @$productAuthor ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$productAuthor ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：終身學習護照、線上課程、線上學習、人才培育、職能分析、教育訓練、RWD、響應式網頁、學習系統、專案建置</div><br>
            <article>
                <p>
                    資通電腦擅長依據不同產學單位的需求，協助建立體系內的終身學習護照。舉凡從開課、審核、線上報名、薦送報名、線上繳費、線上課程、線上評測、成績等資訊，乃至於記錄每個人的學習歷程，皆能運用 RWD（Responsive web design；響應式網頁設計）技術，透過 Web 及行動化應用，將個人學習歷程隨身攜帶，創造個人化學習環境。成功案例包括公務人員終身學習入口網、中醫醫療機構負責醫師訓練管理系統、文官 e 學院、司法官課程線上報名暨雲端數位學習系統、學校校務系統、技術發展中心人才培育系統…等。
                </p>
                <h3>終身學習護照特點：</h3>
                <ul class="disc">
                    <li>
                        終身學習護照需整合職能分析，依據職能及人員狀況盤點所需課程安排，並提供檢核訓練成果整合，彙整績效考評，以提供完整學習歷程循環。
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" src="images/img_article_product_1.png" alt="" class="img-responsive center-block">
                        </figure>
                    </li>
                    <li>
                        運用 Ajax（Asynchronous JavaScript and XML；非同步的 JavaScript 與 XML 技術），於網頁上直接拖拉，即可輕鬆完成開課。
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" src="images/img_article_product_2.png" alt="" class="img-responsive center-block">
                        </figure>
                    </li>
                    <li>
                        使用者端或學生端，符合 RWD 響應式網頁設計規範，線上課程、課程表、問卷考評，皆適用於手機及平版操作，讓不同設備都可正常瀏覽同一網站，提供最佳的視覺體驗。
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img itemprop="image" src="images/img_article_product_3.png" alt="" class="img-responsive center-block">
                        </figure>
                    </li>
                    <li>
                        以機關、公司角度安排教育訓練歷程，亦可以個人角度隨時觀看終身學習情形，建立終身學習護照。
                    </li>
                    <li>
                        提供完整的使用者評核，建立整體向量分析，甚至依據評核結果提供建議課程。
                    </li>
                </ul>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" src="images/img_article_product_4.png" alt="" class="img-responsive center-block">
                </figure>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" src="images/img_article_product_5.png" alt="" class="img-responsive center-block">
                </figure>
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
                想瞭解更多資通終身學習護照專案建置或是政府專案服務嗎？
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
$(function(){
    // $('nav li').eq(2).addClass('active')
    // $('nav li a:contains("產品特寫")').closest('li').addClass('active')
    $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '產品特寫';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>');
 
})
$('section img').each(function(){
    $(this).on("error", function(){
        $(this).attr('src', 'https://api.fnkr.net/testimg/270x154/4479bc/FFF/?text=image+error');
    });
})
</script>
</body>
</html>