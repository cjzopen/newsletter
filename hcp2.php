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
<?= @$hcp2 ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$hcp2 ? '' : exit(); ?>
	<title>【HCP 專欄】<?= @strip_tags($hcpTitle2) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($hcpDescription2) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【HCP 專欄】<?= @strip_tags($hcpTitle2) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($hcpDescription2) ?>" />
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
            <h1 itemprop="name"><?= @strip_tags($hcpTitle2); ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$hcpAuthorImg2; ?>" alt="author <?= @$hcpAuthor2; ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$hcpAuthor2; ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：人資、HR、人資系統、商業智慧系統、分析工具、線上簽核</div><br>
            <article itemprop="articleBody">
                <p>
                    資通電腦 HCP（Human Capital Planner；人力資產規劃系統）一套能滿足現在需求，亦能長久陪伴企業成長的好夥伴！而企業 HR 能遇上選商的機會實屬難能可貴，好不容易有這個機會能參與選系統，這一定是要好好把握的呀！
                </p>
                <p>
                    常聽到 HR 分享說，每家系統商來 DEMO 簡報時，往往說的比唱的好聽，讓 HR 在選商時也很困擾。特別是發現 HR 供應商有如過江之鯽時，HR 還真的不知該從何下手，廠商說的話到底能不能信呀？這時廠商的實績戰果（成績單）就是最實在的憑據了，而這可不是空口白話囉！
                </p>
                <h3>HCP – 國際大廠的首選</h3>
                <p>
                    HCP 至今不僅獲百家以上國內外科技制造廠的選用肯定，近年來服務範圍也括及外商（德商、法商、日商）包括物流業、零售、門市服務產業等，累積超過 300 家企業用戶，服務範疇從兩岸大陸各省，擴及越南、印尼、菲律賓…等。 起初從 2003 年 HCP 立足台灣開始，並跟隨台商腳步前進大陸各個據點，到 2006 年以產品開發導向兩岸多地為同一系統管理，協助集團客戶滿足現在需求與趨勢，兼顧企業未來發展。一套靈活的系統才是滿足企業未來的需求的關鍵要素，千萬不要等到不夠用了，再去買新的系統，做重覆的二次投資喔。
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
                <h3>9 大特點，保障您的投資效益</h3>
                <ul class="decimal">
                    <li>
                        商業智慧系統（Business Intelligence System；BIS）<br>
                        主管可以隨時透過 IE 進入 BIS 系統查看企業內各項指標及各部門人力配置狀況，BIS 系統內將提供 58 個 KPI （Key Performance Indicator；關鍵績效指標），預測各部門如要達標所需召募何種人才及下階段教育訓練的重點，以分析組織能力，提昇企業整體競爭力。
                    </li>
                    <li>
                        主管桌面系統（Manager Desk；MD）員工自助系統（Employee Self Service；ESS）<br>
                        主管桌面提供所屬職工完整訊息，供主管即時進行相關分析及管理。提供員工完整訊息：公告、薪酬、加班請假、年休假、班表、內外訓課程、技能證照……等資料查詢，並可透過 IE 填寫與查詢績效考核資料。
                    </li>
                    <li>
                        完整保存歷史記錄<br>
                        系統完整保留各項歷史記錄，如員工職務、薪資福利、訓練、技能、證照…，並保留企業歷年政策、制度等歷史記錄，整合 Visio 呈現組織及架構圖，輕鬆維護企業樹狀組織歷史架構。
                    </li>
                    <li>
                        八大分析模組，資料直接導入分析工具<br>
                        提供人事、薪資、差勤、保險、績效考核、教育訓練、召募任用、獎懲管理等八大分析模組，並可隨時導入 Excel，以滿足各級主管即時分析決策要求。
                    </li>
                    <li>
                        Work Flow（線上簽核流程）<br>
                        自訂企業簽核流程後，系統自動以設定簽核流程，實施線上簽核管理，發行者可線上追蹤簽核狀態。
                    </li>
                    <li>
                        異常狀況警示系統（Alert）<br>
                        當企業內部出現異常，HCP 系統將通過 Email 或簡訊方式提示主管異常狀況的發生。
                    </li>
                    <li>
                        可進行組織複製<br>
                        當企業規模擴大或者需要建設新廠時，可複製原廠各項制度至新廠，新公司（工廠）的制度流程可在瞬間完成，且可作集中式管理，避免重複投資。
                    </li>
                    <li>
                        最佳業務實踐<br>
                        HCP 客戶群已達數百多家中大型企業，並將各行業的標準都以參數的形式納入標準版本，可為企業快速的建立所有制度流程，節約實行的時間和成本。
                    </li>
                    <li>
                        組織績效考核，績效資訊更全面<br>
                        可利用平衡計分卡（The Balanced Scorecard；BSC）進行組織績效考核設定與管理，預防組織的問題發生，並提供處理行動的判斷依據，發覺組織隱藏問題，針對組織進行即時與定期的溝通和管理。
                    </li>
                </ul>
                <p>
                    HCP 整合 Analyzer 商業智慧軟體，內建至少 25 種維度（Dimension）及 20 種量值（Measure），維度是指分析事情的角度，例如人員資料、廠區資料、薪資項目、加班費資料等，量值則代表記量化資料，例如工時、成本、加班費、薪資金額等，藉由靈活拖曳操作，使用內建維度階層，分析各階層數值，解決複雜的問題，不需透過資訊人員撰寫程式，就可依據需求產製未來決策、預估相關統計等。
                </p>
                <!-- <figure>
                    <img class="center-block img-responsive" src="images/img_article_hcp_1.png" alt="資通電子報">
                </figure> -->
                <p>
                    資通 HCP 彈性高、操作容易，不僅讓 HR 管理更全面、精準，更方便主管與員工自主呈報、查詢、記錄、執行等作業，促進溝通與管理，效率加倍！
                </p>
            </article>
            <aside class="gray-bg tac blue2-color">
                想瞭解更多資通 HCP 人力資產規劃系統，有哪些彈性功能協助企業解決人資管理問題嗎？
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
$('section img').each(function(){
    $(this).on("error", function(){
        $(this).attr('src', 'https://api.fnkr.net/testimg/270x154/4479bc/FFF/?text=image+error');
    });
})
$(function(){
    // $('nav li a').filter(function(){ return $(this).text().toLowerCase() === 'HCP 專欄';}).closest('li').addClass('active')
    $('nav li a:contains("HCP 專欄")').closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>