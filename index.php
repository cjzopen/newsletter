<?php 
include('setting.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<title>ARES 資通電腦電子報</title>
	<meta name="description" content="<?= @$description ?>">
	<!-- <link rel="dns-prefetch" href="//www.ares.com.tw"> -->
	<link rel="stylesheet" href="lib/swiper3.4.1/swiper.min.css">
	<link rel="stylesheet" href="css/cj.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
    <meta property="og:image" content="<?= @$index ?>images/og/focus.jpg" />
    <meta property="fb:app_id" content="900338710010817" />
<?php include('embed/gtm.php'); ?>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php include('embed/gtm-noscript.php'); ?>
<div class="loading" data-text="資通電子報"></div>
<div id="all">
<?php include('embed/header.php'); ?>
	<main class="wrap container-fluid">
		<div class="row">
			<div class="flex-box">
				<div class="col-xs-12 col-sm-12 col-md-12 flex-box flex-center">
					<article class="thumbnail gray-bg" id="focus" data-text="本月焦點">
						<figure>
							<img class="img-responsive" src="images/img_index_focus.jpg" alt="電子報焦點">
						</figure>
						<div id="description">
							<h1 class="main-color"><?= @$title ?></h1>
							<aside class="gray-color"><?= @$description ?></aside>
							<div class="meta">
								<div>
									<img src="<?= @$authorImg ?>" alt="author <?= @$author ?>">
									<i>by</i>
									<span class="gray-color"><?= @$author ?></span>
									<a href="focus" class="fr" title="<?= @$title ?>">
										<button class="btn btn-danger">繼續閱讀</button>
									</a>
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="col-xs-12" id="e"></div>
<?php 
$e_html = '';
foreach ($e as $row) {
	$e_summary = '';
	if(!empty($row['summary'])){
		$e_summary = '<aside class="gray-color">'.$row['summary'].'</aside>';
	}
	if(!empty($row['author'])){
		$e_summary = '<div class="meta"><img class="lazy" data-original="'.$row['authorImg'].'" alt="author"><i>by</i><span class="gray-color">'.$row['author'].'</span></div>';
	}
	$e_html = $e_html.'<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="'.$row['link'].'" rel="external" data-text="搶先 e 報" title="'.strip_tags($row['title']).'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="'.$row['img'].'" alt="'.strip_tags($row['title']).' 搶先 e 報">
						</figure>
						<h4>'.$row['title'].'</h4>'.$e_summary.'</a>
				</div>';
}
echo $e_html;

if($product){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center" id="product">
					<a class="thumbnail fff-bg" href="product" data-text="產品特寫" title="'.@$productTitle.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_product.jpg" alt="產品特寫">
						</figure>
						<h4>'.@$productTitle.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$productAuthorImg.'" alt="author '.@$productAuthor.'">
							<i>by</i>
							<span class="gray-color">'.@$productAuthor.'</span>
						</div>
					</a>
				</div>';
}
if($product2){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="product2" data-text="產品特寫" title="'.@$productTitle2.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_product.jpg" alt="產品特寫">
						</figure>
						<h4>'.@$productTitle2.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$productAuthorImg2.'" alt="author '.@$productAuthor2.'">
							<i>by</i>
							<span class="gray-color">'.@$productAuthor2.'</span>
						</div>
					</a>
				</div>';
}
if($it){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center" id="it">
					<a class="thumbnail fff-bg" href="it" data-text="技術交流" title="'.@$itTitle.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_it.jpg" alt="技術交流">
						</figure>
						<h4>'.@$itTitle.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$itAuthorImg.'" alt="author '.@$itAuthor.'">
							<i>by</i>
							<span class="gray-color">'.@$itAuthor.'</span>
						</div>
					</a>
				</div>';
}
if($it2){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="it2" data-text="技術交流" title="'.@$itTitle2.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_it.jpg" alt="技術交流">
						</figure>
						<h4>'.@$itTitle2.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$itAuthorImg2.'" alt="author '.@$itAuthor2.'">
							<i>by</i>
							<span class="gray-color">'.@$itAuthor2.'</span>
						</div>
					</a>
				</div>';
}
?>
				<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="doctor" data-text="ERP 達人" title="<?= @$doctorTitle ?>">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_doctor.jpg" alt="erp">
						</figure>
						<h4><?= @$doctorTitle ?></h4>
						<div class="meta">
							<img class="lazy" data-original="<?= @$doctorAuthorImg ?>" alt="author <?= @$doctorAuthor ?>">
							<i>by</i>
							<span class="gray-color"><?= @$doctorAuthor ?></span>
						</div>
					</a>
				</div>
<?php
if($hcp){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center" id="hcp">
					<a class="thumbnail fff-bg" href="hcp" data-text="HCP 專欄" title="'.@$hcpTitle.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_hcp.jpg" alt="HCP 專欄">
						</figure>
						<h4>'.@$hcpTitle.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$hcpAuthorImg.'" alt="author '.@$hcpAuthor.'">
							<i>by</i>
							<span class="gray-color">'.@$hcpAuthor.'</span>
						</div>
					</a>
				</div>';
}
if($hcp2){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="hcp2" data-text="HCP 專欄" title="'.@$hcpTitle2.'">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_hcp.jpg" alt="HCP 專欄">
						</figure>
						<h4>'.@$hcpTitle2.'</h4>
						<div class="meta">
							<img class="lazy" data-original="'.@$hcpAuthorImg2.'" alt="author '.@$hcpAuthor2.'">
							<i>by</i>
							<span class="gray-color">'.@$hcpAuthor2.'</span>
						</div>
					</a>
				</div>';
}
?>
<?php
if($management){
echo '				<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="management" data-text="管理專欄">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_management.jpg" alt="管理專欄">
						</figure>
						<h4>'.@$managementTitle.'</h4>
						<div class="meta">
							<img class="lazy" data-original="img/authors/harry.png" alt="author">
							<i>by</i>
							<span class="gray-color">余宏揚</span>
						</div>
					</a>
				</div>';
}
?>
<?php
if($job){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="http://bit.ly/2pSAdxT" rel="external" data-text="菁英專欄">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_Ares-jobs.jpg" alt="菁英專欄">
						</figure>
						<h4>'.@$jobTitle.'</h4>
						<aside class="gray-color">
							'.@$jobDescription.'
						</aside>
					</a>
				</div>';
}
?>
<?php
if($job2){
echo '			<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="'.@$jobLink2.'" data-text="菁英招募" rel="external">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/default/img_index_job.jpg" alt="菁英招募">
						</figure>
						<h4>'.@$jobTitle2.'</h4>
						<div class="meta">
							<img class="lazy" data-original="img/authors/marketing.png" alt="author">
							<i>by</i>
							<span class="gray-color">行銷部</span>
						</div>
					</a>
				</div>';
}
?>
				<div class="col-xs-12 col-sm-6 col-md-4 flex-box flex-center">
					<a class="thumbnail fff-bg" href="cartoon" data-text="漫畫資通" title="<?= @$cartoonTitle ?>">
						<figure>
							<img class="center-block img-responsive lazy" data-original="images/img_index_cartoon.jpg" alt="漫畫資通">
						</figure>
						<h4><?= @$cartoonTitle ?></h4>
						<div class="meta">
							<img class="lazy" data-original="img/authors/marketing.png" alt="author">
							<i>by</i>
							<span class="gray-color">行銷部</span>
						</div>
					</a>
				</div>
			</div>
			<!-- <br>
			<div class="col-xs-12">
				<a href="http://bit.ly/2t8EIpS" rel="external" style="display: block;width: 100%;height: 150px;background:url('images/java-banner.png') left top no-repeat;" title="java 徵才">
				</a>
			</div> -->
		</div>
	</main>
	<section class="gray-bg" id="info">
		<div class="wrap">
		<h2 class="center-block tac">資訊補給站</h2>
			<!-- Slider main container -->
			<div class="swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
<?php 
$info_html = '';
foreach ($info as $row) {
	$info_html = $info_html.'<div class="swiper-slide">
						<div class="flex-box flex-center">
				        	<div class="thumbnail fff-bg">
								<figure>
									<a href="'.$row['link'].'" rel="external" title="'.strip_tags($row['title']).'">
										<img class="center-block img-responsive lazy" data-original="'.$row['img'].'" alt="資訊補給">
									</a>
								</figure>
								<div class="txt">
									<h4 onclick="window.open(\''.$row['link'].'\')">'.$row['title'].'</h4>
									<button class="btn btn-danger" onclick="window.open(\''.$row['link'].'\')">瞭解更多</button>
								</div>
							</div>
			        	</div>
			        </div>';
}
echo $info_html;
?>
			    <!-- 有時候 <a> 會失效，要靠 onclick -->
			    </div>
			    <!-- If we need pagination -->
			    <div class="swiper-pagination"></div>
			    
			    <!-- If we need navigation buttons -->
			    <!-- <i class="swiper-button-prev"></i> -->
			    <!-- <i class="swiper-button-next"></i> -->
			    
			    <!-- If we need scrollbar -->
			    <!-- <div class="swiper-scrollbar"></div> -->
			</div>
		</div>
	</section>
<?php include('embed/footer.php'); ?>
</div>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="js/main.js"></script>
<script src="js/gtm_trigger.js" async></script>
<!-- <script src="lib/swiper3.4.1/swiper.min.js"></script> -->
<script src="lib/jquery.lazyload.min.js"></script>
<script>
$(function(){
	$('#y-m').text('<?= @$date ?>')

	$('#e').next().find('a.thumbnail').attr('data-text','');

	//* swiper src:js/src/main.js
	//* if only one swiper-slide,comment out swiper.js request and these code.
	var swn = $('.swiper-slide').length;
	if(swn >= 2){
		$.ajax({
		  type: "GET",
		  url: 'lib/swiper3.4.1/swiper.min.js',
		  dataType: "script",
		  cache: true
		})
		  .done(function( script, textStatus ) {
		    console.log( 'swiper loading:'+textStatus );
		    var ww=$(window).outerWidth(),pv="";if($(".swiper-slide").length>2){ww>991&&(pv=3),ww>767&&991>=ww&&(pv=2),767>=ww&&(pv=1);var swiper=new Swiper(".swiper-container",{pagination:".swiper-pagination",slidesPerView:pv,paginationClickable:!0,spaceBetween:10,slideToClickedSlide:!1,loop:!1});$(window).resize(function(){var e=$(window).outerWidth();e>991&&(swiper.params.slidesPerView=3),e>767&&991>=e&&(swiper.params.slidesPerView=2),767>=e&&(swiper.params.slidesPerView=1),swiper.update()})}else if($(".swiper-slide").length=2){ww>767&&(pv=2),767>=ww&&(pv=1);var swiper=new Swiper(".swiper-container",{pagination:".swiper-pagination",slidesPerView:pv,paginationClickable:!0,spaceBetween:10,slideToClickedSlide:!1,loop:!1});$(window).resize(function(){var e=$(window).outerWidth();e>767&&(swiper.params.slidesPerView=2),767>=e&&(swiper.params.slidesPerView=1),swiper.update()})}else $(".swiper-slide").length<=1&&($(".swiper-slide-active").removeClass(),$(".swiper-pagination").remove());
		  })
		  .fail(function( jqxhr, settings, exception ) {
		    console.log('swiper loading:'+jqxhr);console.log(settings);console.log(exception);
		});
	}

	// window.addEventListener("load",$("img.lazy").lazyload({ effect: "fadeIn" }));
	$("img.lazy").lazyload({ effect: "fadeIn" })

	// gtm trigger
	var dataLayer = window.dataLayer || [];
	$('a.thumbnail').click(function(){
		var $text = $(this).find('h4').text();
		dataLayer.push({
			"event": "homepage_box_click",
			"homepage_box_text": $text
		})
	})

	$('.swiper-slide a,.swiper-slide h4,.swiper-slide button').click(function(){
		var $text = $(this).closest('.thumbnail').find('h4').text();
		dataLayer.push({
			"event": "homepage_info_click",
			"homepage_info_text": $text
		})
	})
})
</script>
<script>
window.addEventListener("load", (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')));
</script>
</body>
</html>