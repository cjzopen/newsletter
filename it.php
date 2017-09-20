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
	<title>【技術交流】<?= @strip_tags($itTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($itDescription) ?>">
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【技術交流】<?= @strip_tags($itTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($itDescription) ?>" />
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
<style>.lower-alpha>li{list-style:lower-alpha;}</style>
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
            <h1 itemprop="name"><?= @strip_tags($itTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$itAuthorImg ?>" alt="author <?= @$itAuthor ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$itAuthor ?></span>
            </div>
        </div>
        <section>
            <div class="blue2-color key-words">關鍵字：資安、個資外洩、政府專案、軟體測試、單元測試、Web Service</div><br>
            <article itemprop="articleBody">
                <p>
                    近年來時有所聞，政府資訊服務常因系統異常造成服務中斷，或個資外洩等新聞，這些事件不僅僅造成民眾困擾，甚至因為資料外露造成詐騙案件更趨頻繁，民眾強烈質疑政府建置資訊系統品質低落。要如何提升系統軟體品質一向是個需要被嚴正視之的課題，資通電腦集多年系統整合與資訊安全經驗，協助政府機關執行各項大型專案，確保掌控專案進度與品質！
                </p>
                <h3>測試，是品質的重要基石</h3>
                <p>
                    軟體測試是項複雜且龐大的工程，更是軟體產品執行品質控管重要關鍵。正確地規劃軟體測試計畫，可以協助軟體專案在開發與維護過程中，有效地執行軟體測試工作，提高軟體測試效益。在多年的參與系統開發建置經驗中可得知，測試花費占整個系統開發工作至少 30% 以上時間及成本，所以選擇合適的測試工具將可大幅提升軟體測試效益。
                </p>
                <h3>SoapUI：Web Service 單元測試工具</h3>
                <p>
                    SoapUI 是當前比較簡單實用的開源 Web Service 測試工具，提供桌面應用程式和 IDE 插件程序兩種使用方式。能夠快速構建測試 Project 和組織 Test Case 是該工具的一大特性，下面將通過實例介紹如何使用 SoapUI 進行 Web Service 單元測試。
                </p>
                <h3>SoapUI 基本操作</h3>
                <h4>※ 建立測試專案</h4>
                <ul class="lower-alpha">
                    <li>
                        開啟 SoapUI，新增 SOAP 專案
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_1.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        輸入專案名稱及 WSDL 位址
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_2.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        建立測試個案
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_3.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        輸入測試個案名稱
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_4.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        完成的測試個案
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_5.png" alt="資通電子報">
                        </figure>
                    </li>
                </ul>
                <h4>※ 增加引用 Web Service</h4>
                <ul class="lower-alpha">
                    <li>
                        點選專案名稱按右鍵 --> 選擇 Add WSDL
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_6.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        輸入 WSDL 路徑
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_7.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        新增完成
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_8.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        增加測試步驟：點選測試步驟 --> Add Step --> SOAP Request
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_9.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        新增一個 Web Service：增加使用者登入，取得 Token 作業
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_10.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        選擇新的 Web Service
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_11.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        設定測試名稱
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_12.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        以拖曳方式調整執行順序
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_13.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        設定測試參數內容：分別設定兩個 Web Service 的 SOAP 參數內容
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_14.png" alt="資通電子報">
                        </figure>
                    </li>
                </ul>
                <h4>※ 增加參數移轉</h4>
                <ul class="lower-alpha">
                    <li>
                        插入參數移轉步驟（Property Transfer）： 在第一個 Web service（Qrylogin）後差入一個 Property Transfer 的步驟
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_15.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        新增參數
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_16.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        輸入參數名稱
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_17.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        輸入來源及目的：本案例是以 QryLogin 的回傳值（response）的 Token 欄，傳送至 ManToDoList 的輸入參數（request），兩者是以 xpath 取出及寫入
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_18.png" alt="資通電子報">
                        </figure>
                    </li>
                </ul>
                <h4>※ 測試</h4>
                <ul class="lower-alpha">
                    <li>
                        點選測試個案，按右鍵選擇 Show TestCase Editor
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_19.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        選擇 Runs this testcase
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_20.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        檢視測試結果：逐一檢查測試是否正確
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_21.png" alt="資通電子報">
                        </figure>
                    </li>
                </ul>
                <h4>※ 評估測試結果</h4>
                <ul class="lower-alpha">
                    <li>
                        增加測試結果評估：選擇 Adds an assertion to this item
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_22.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        新增結果評估：選擇 Property Content
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_23.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        回傳結果評估：含有指定字串視同成功
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_24.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        測試成功
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_25.png" alt="資通電子報">
                        </figure>
                    </li>
                    <li>
                        測試失敗
                        <figure itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                <img itemprop="image" class="center-block img-responsive" src="images/img_article_it_26.png" alt="資通電子報">
                        </figure>
                    </li>
                </ul>
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
                資通電腦擁有超過 36 年系統整合與專案輔導經驗，大型政府專案經驗豐富，想瞭解更多資通政府專案服務嗎？
                <br>
                ★請洽 <a href="https://www.ares.com.tw/services/gov/consult/">線上免費諮詢</a> 或服務窗口 - 汪小姐 Tel：02 -2522-1351 Ext. 301
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