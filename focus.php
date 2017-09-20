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
	<title>【本月焦點】<?= @strip_tags($title) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($description) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="preload" href="images/focus-banner.png" as="image">
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【本月焦點】<?= @strip_tags($title) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($description) ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?= @$index ?>images/og/focus.jpg" />
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
        <figure class="banner">
            <img itemprop="image" class="center-block img-responsive" src="images/head_focus.jpg" alt="<?= @$description ?>">
        </figure>
		<div class="head focus">
            <ul class="list-inline">
                <li>
                    <h3>本月焦點</h3>
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
            <h1 itemprop="name"><?= @strip_tags($title) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$authorImg ?>" alt="author <?= @$author ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$author ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：數位政府、電子化政府、政府 e 化、社群媒體、社群行銷、政策行銷、衛生福利部、政府專案服務</div><br>
            <article itemprop="articleBody">
                <p>
                    資通電腦擁有多年協助政府機關執行各項大型專案的服務經驗，包含事前規劃、廠商連繫與客戶溝通協調、系統建置與教育輔導。據觀察近年為強化與民眾互動，電子化政府需求因應而生。從過去系統建置為主，逐漸發展出與社群平台一起維運的趨勢。而隨著民眾網路行為模式的轉變，目前多數政府網站除了提供豐富官網內容外，多數都會搭配社群媒體運用於政策行銷上的宣導，效果也頗為顯著。公部門導入社群媒體於政策行銷屬於電子化政府的一環，而社群媒體操作顧問與輔導，逐漸成為政府專案營運的必備工具。資通電腦亦透過許多大型專案合作與輔導獲得豐沛能量，究竟社群行銷經營要如何做到？以下將娓娓道來。
                </p>
                <h3>送子鳥官網社群交叉行銷 服務品質獲獎肯定</h3>
                <p>
                    資通電腦所建置的送子鳥資訊服務網（中文版、英文版、越語版），105 年榮獲國家發展委員會第八屆「政府服務品質獎」。除建置一站式貼心服務，提供民眾自結婚、懷孕、分娩、新生兒至學齡前、學齡兒童至青少年各階段所需要的福利項目及衛教資訊，更運用電子地圖的快速查詢方式，讓民眾可以直接針對所在的縣市查詢補助辦法，掌握自己可以申請的條件、額度、時程等相關權益。另透過社群媒體推廣，讓粉絲可以第一時間在【幸福送子鳥】找到自己關心的衛教資訊、社會補助、生活知識以及民眾最關心的議題等，拉近與民眾之間的距離。
                </p>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" src="images/img_article_focus_1.png" alt="圖一、送子鳥資訊服務網榮獲國家發展委員會第八屆「政府服務品質獎」" class="img-responsive center-block">
                    <figcaption class="tac">圖一、送子鳥資訊服務網榮獲國家發展委員會第八屆「政府服務品質獎」</figcaption>
                </figure>
                <h3>追蹤社家署粉絲團  社福資訊更即時</h3>
                <p>
                    近期更承接衛生福利部社會及家庭署（以下簡稱社家署）全球資訊網暨署長信箱資訊系統，以及社群媒體維護專案。除對全球資訊網（中文版、英文版、兒童版）進行系統與內容維護，協助網站重點業務資訊圖像化，擴大網站各項福利業務訊息能見度；新增電子書功能，提高民眾手機載具瀏覽的方便度；配合政府開放資料政策建置『闢謠專區』，以便於第一時間澄清爭議，提供民眾爭議訊息查詢平台。除此之外，也對社群媒體（Youtube、Google+、Facebook 粉絲專頁）進行營運管理，即時發布重大福利政策，定期推廣社家署業務內容。透過社群媒體固定發布動態消息，推廣婦女福利、兒少福利、家庭支持、身心障礙以及老人福利等各項社會福利資訊，讓民眾深入瞭解社家署的服務內容。
                </p>
                <p>
                    社家署為專職規劃與執行老人、身心障礙者、婦女、兒童及少年福利、家庭支持等社會福利事項之政府機關，致力建構以社區為基礎，以家庭為中心的福利服務網絡，促進全民權益與福祉，支持與健全家庭功能，創造幸福社會願景。粉絲團資訊則非常多元性，提供民眾整合性社會福利資訊彙整，並集中相關活動資源，舉凡重大政策（如：前瞻基礎建設專區）、相關新聞（如：多功能輔具資源整合推廣中心介紹）、生活常識（如：要如何預防熱傷害）、活動消息（如：10 月 11 日臺灣女孩日系列活動）等，都可以透過追蹤【衛生福利部社會及家庭署】粉絲團即時掌握社福資訊。未來相信政府持續社群媒體主題的經營與其效益的延續，運用主題性串起多元社群媒體工具，可讓政策行銷活動的影響範圍與發酵時間得以大為提升，更加強化與民眾的互動溝通。
                </p>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" src="images/img_article_focus_2.png" alt="圖二、衛生福利部社會及家庭署全球資訊網" class="img-responsive center-block">
                    <figcaption class="tac">圖二、衛生福利部社會及家庭署全球資訊網</figcaption>
                </figure>
                <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                    <img itemprop="image" src="images/img_article_focus_3.png" alt="圖三、衛生福利部社會及家庭署 Facebook 粉絲團" class="img-responsive center-block">
                    <figcaption class="tac">圖三、衛生福利部社會及家庭署 Facebook 粉絲團</figcaption>
                </figure>
                <p>
                    資通電腦擁有超過 36 年系統整合與專案輔導經驗，大型政府專案經驗豐富，代表性專案包括公教人員退休撫卹平臺、立法院行政業務管理系統、立法院無紙化會議系統、數位學習暨終身學習護照、全球製造服務資訊整合管理解決方案輸出旗艦計畫、送子鳥資訊服務網服務推廣計畫、衛生福利部藥品查驗登記審查電子化作業平台建置等。
                </p>
                <!-- <blockquote>縮排</blockquote> -->
                <!-- <ul class="disc"></ul> -->
                <!-- <ul class="decimal"></ul> -->
                <!-- <abbr title="註解內容">對象</abbr> -->
                <!-- <sup id="mark1">
                    注1：
                </sup> -->
                ★ 【衛生福利部社會及家庭署】粉絲團：<a href="https://www.facebook.com/sfaa.gov.tw/">https://www.facebook.com/sfaa.gov.tw/</a>
                <br>
                ★ 【幸福送子鳥】粉絲團：<a href="https://www.facebook.com/ibabymohw/">https://www.facebook.com/ibabymohw/</a>
                <br>
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
    $('nav li a:contains("本月焦點")').closest('li').addClass('active')
    // $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '本月焦點';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>