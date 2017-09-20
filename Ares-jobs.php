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
<?= @$job ? '' : '<meta name="robots" content="noindex, nofollow"></head>' ?>
<?php @$job ? '' : exit(); ?>
	<title>【菁英專欄】<?= @strip_tags($jobTitle) ?> - ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @strip_tags($jobDescription) ?>">
    <link rel="canonical" href="https://www.ares.com.tw/events/Ares-jobs-engineer-201704" />
	<!-- <link rel="dns-prefetch" href="marketing.ares.com.tw"> -->
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta property="article:author" content="https://www.facebook.com/AresInternational" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="【菁英專欄】<?= @strip_tags($jobTitle) ?> - ARES資通電子報" />
    <meta property="og:description" content="<?= @strip_tags($jobDescription) ?>" />
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
		<div class="head job">
            <ul class="list-inline">
                <li>
                    <h3>菁英專欄</h3>
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
            <h1 itemprop="name"><?= @strip_tags($jobTitle) ?></h1>
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="author">
                <img src="<?= @$jobAuthorImg ?>" alt="author <?= @$jobAuthor ?>">
                <i>by</i>
                <span itemprop="name" class="gray-color"><?= @$jobAuthor ?></span>
            </div>
        </div>
        <section>
            <!-- <div class="blue2-color">關鍵字：123、456</div><br> -->
            <article itemprop="articleBody">
                <h3>程式不是重點 創造價值才是王道</h3>
                <p>
                    很多人對於「工程師」的刻版印象無非是寫程式和程式設計的角色，腦中只有密密麻麻的程式碼，而且八成是足不出戶的宅男？這樣的想法已經落伍了！尤其現在科技日新月異，特別是 Fintech（Financial Technology；金融科技）相關應用，需要多元背景的專業人士，才能創造最大價值。資通電腦金融服務部產品開發組黃辛鉉經理表示，關鍵不在於編寫最好的程式碼，而是是否能幫助別人創造價值，那你就成功了。
                </p>
                <h3>精實的旅程 越走越踏實</h3>
                <p>
                    「從求學時期資管、電腦到會計一路走來，除了本身的興趣外，積極涉略多元化的領域與產業，從銀行端的 IT 部門到資通，『踏實』是一路走來秉持的精神，正是資通的特色。也許就是這樣的相似之處，牽引我來到了資通駐足。」黃經理娓娓道來加入資通的歷程。當初選擇資通，是因為佩服資通對於 SI（System Integration；系統整合）的專業堅持與屹立不搖的穩定成長。資通電腦 T1 部門主要客戶為金融業，黃經理主要負責資通自行研發的 AFEIS（Advanced Foreign Exchange Information System）國內外匯電腦整合系統與 eAresBank 海外分行核心系統，整合了國際金融業務的要求及商業銀行的功能，是銀行面對國際化的最佳競爭利器。他也大方的分享如何積極克服工作瓶頸，不論是主動與同仁提出討論發想、提供協助，到自主重新學習、鑽研新的知識，就是堅持要完成不可能的任務。黃辛鉉經理笑說「這種魚幫水、水幫魚的環境與配合方式，也是難能可貴的企業文化。」
                </p>
                <p>
                    每一個專案性質廣度與複雜程度大不同，每一位客戶也都有自己的原則與需求，因此不能用同一套 SOP 就全部直接套用在所有專案上。而這時候工程師除了「寫程式、抓 BUG」外，時間管理與溝通更是確保專案能夠順利進行的關鍵。 黃經理強調，同仁們要願意主動與積極，不論是對內對外都能夠清楚的溝通與表達，除了十足的耐心外，能夠設身處地的以使用者的角度和感受來考慮整體的需要，更是不可多得的技能！
                </p>
                <figure>
                    <img class="center-block img-responsive" src="images/img_article_Ares-jobs_1.jpg" alt="資通電子報">
                    <figcaption class="tac">
                        圖一：資通電腦 T1 金融服務部產品開發組黃辛鉉經理。
                    </figcaption>
                </figure>
                <h3>在程式中摸索智慧  學會笑看人生</h3>
                <p>
                    「資通電腦協助提供金融服務完成上線的客戶中，超過 90 % 會續簽維護合約，除了是對資通產品與服務的肯定，更加證明我們的細心負責、積極進取的專業態度！」黃經理笑著說。為回饋同仁的辛勞，公司也給予相當彈性化的福利，讓員工能在工作、生活和健康能夠取得平衡，除了公司的定期的登山活動外，也提醒注意自己的身體狀況，補助員工到醫療院所健檢，畢竟擁有健康的身體才有精力工作、認真玩樂，享受美好生活！
                </p>
                <p>
                    「工作沒有壓力是騙人的，總是會遇到技術層面的相關質疑或是挑戰，但是公司同仁小組間、部門間都能互相合作支援，讓問題迎刃而解。如此歡樂溫馨的環境，彼此互相分擔，從此建立起的革命情感，也是很珍貴的。」黃經理笑道。T1 金融服務部產品開發組時常要輪流 on call 待命，特別是在每年的跨年夜，當大家都在外面狂歡等倒數，T1 的同仁則是在公司一邊注意客戶的狀況，一邊歡樂的享用美食，每年以完美的團隊合作與佳餚渡過 T1 特有的跨年傳統，邁向新的一年！
                </p>
                <figure>
                    <img class="center-block img-responsive" src="images/img_article_Ares-jobs_2.jpg" alt="資通電子報">
                    <figcaption class="tac">
                        圖二：資通電腦 T1 金融服務部產品開發組歡樂跨年聚餐傳統。
                    </figcaption>
                </figure>
                <p>
                    黃經理驕傲地笑說：「部門裡的年輕員工認真上進，但也會善用時間，藉由每年的尾牙表演，展現多才多藝的一面，特別是先前男扮女裝詮釋冰雪奇緣的表演，更是獲得滿堂彩，成為公司每年尾牙備受矚目的表演團隊之一！」
                </p>
                <figure>
                    <img class="center-block img-responsive" src="images/img_article_Ares-jobs_3.jpg" alt="資通電子報">
                    <figcaption class="tac">
                        圖三：資通電腦 T1 金融服務部產品開發組於尾牙合照。
                    </figcaption>
                </figure>
                <sup>T1 同仁熱情贊助資通電子報影片拍攝：<a href="http://bit.ly/2nGSAl1" rel="external">http://bit.ly/2nGSAl1</a></sup>
                <h3>人才背景多元 創造無限可能</h3>
                <p>
                    對於招募人才所看重的需求，黃經理說「只要有熱誠與基本概念，以及願意學習的心，並非只有本科系才能勝任。非本科系背景的人反而能從不同角度與專業來分析同一件事情、提供豐富的回饋，進而協助團隊突破盲點，並解決問題。」比起名校或是追求更優秀的技能，資通更看重的是潛力與特質，能夠主動積極、善於溝通表達、樂觀、穩定度高的人才，更加無可取代。
                </p>
                <p>
                    想一展長才發揮你的抱負與熱情嗎？趕快加入資通人的行列，資通電腦熱門職缺：<a href="http://bit.ly/2dhwp5b" rel="external">http://bit.ly/2dhwp5b</a>。
                </p>
                <figure>
                    <img class="center-block img-responsive" src="images/img_article_Ares-jobs_4.jpg" alt="資通電子報">
                    <figcaption class="tac">
                        圖四：資通電腦 T1 金融服務部產品開發組團隊合照。
                    </figcaption>
                </figure>
                <h3>資通 AFEIS 國內外匯電腦整合系統介紹</h3>
                <p>
                    資通電腦所研發的 AFEIS（Advanced Foreign Exchange Information System；AFEIS）國內外匯電腦整合系統為功能完整的外匯業務系統，涵蓋存匯、進出口、放款及交易室等各項業務。由於 AFEIS 的物件導向設計概念，適用於各種主機平台；穩定且延伸性強的系統特性，不但能和銀行現有的系統結合，並可銜接環球銀行金融電信協會（Society for Worldwide Interbank Financial Telecommunication；SWIFT）的全球連線系統。AFEIS 操作容易，在管理性及整合性作業上可以充分配合銀行實際需求，有效提昇作業效率與風險控管，是銀行面對國際化的最佳競爭利器。
                </p>
                <p>
                    導入 AFEIS 外匯系統的銀行有中國農民銀行（已併入合作金庫商銀）、板信銀行、華泰銀行、京城銀行、瑞興銀行、凱基銀行、國泰世華銀行，導入國際金融業務分行( Offshore Banking Unit；OBU ) 系統模組的銀行有華南銀行、第一銀行、高雄市銀行、華僑銀行（併入花旗銀行前）、台灣企銀等。
                </p>
                <h3>資通 eAresBank 簡介</h3>
                <p>
                    eAresBank 統合國際金融業務的要求及商業銀行的功能，採線上即時作業模式，可銜接環球銀行金融電信協會（SWIFT）全球連線系統。功能完整、穩定強大的系統整合暨簡化之作業流程，使銀行能快速獲得決策資訊，加強國際競爭力。資通電腦 eAresBank 導入合作的銀行除了合作金庫商業銀行之外，還包括台灣主要的銀行如台灣土地銀行、臺灣企銀、王道銀行、國泰世華銀行、遠東商業銀行、新光銀行、大眾銀行等等。
                </p>
                <h3>資通電腦簡介</h3>
                <p>
                    資通電腦是臺灣第一家獲准股票上市櫃的軟體公司，在資訊與系統整合領域累積超過 36 年的實務經驗，為大中華區專業的管理資訊系統軟體供應商，為金融、政府和工商企業等單位提供資訊化的產品與服務。除為環球銀行金融電信協會（Society for Worldwide Interbank Financial Telecommunication；SWIFT）認證夥伴、台灣第一家 IFRS（International Financial Reporting Standards；國際財務報告準則）解決方案輔導廠商、Oracle 台灣專業代理商與 Microsoft Gold Certified Partner 外，也為台灣 LED 產業市佔第一並榮獲國際研究機構 Gartner台灣唯一建議參考的製造執行系統（Manufacturing Execution System；MES）廠商、市占率最高的銀行海外分行核心系統與外匯系統供應商。自行研發的資通 ArgoERP 企業資源規劃系統，更與泰國電腦產品與軟體服務領導商 SVOA 集團，旗下系統整合 IT 龍頭 DataOne Asia 公司攜手合作，朝東南亞第一 ERP 系統商的目標邁進。
                </p>
            </article>
            <aside class="gray-bg tac blue2-color">
                想要了解更多關於 AFEIS 國內外匯電腦整合系統與 eAresBank 嗎？
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
    $('nav li a').filter(function(){ return $(this).text().toLowerCase() === '菁英專欄';}).closest('li').addClass('active')
    $('#y-m').text('<?= @$date ?>')
})
</script>
</body>
</html>