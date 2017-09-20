	<header class="gray2-color">	
		<div class="deep-bg" id="top">
			<div class="wrap text-right">
				<ul class="list-inline">
					<li><a href="https://www.ares.com.tw/epaper/" rel="external">各期期刊</a></li>
					<li><a href="https://www.ares.com.tw/epaper/subscribe/" rel="external">訂閱/取消</a></li>
					<li><a href="https://www.ares.com.tw/" rel="external">資通首頁</a></li>
					<li><a href="mailto:marketing@ares.com.tw">意見信箱</a></li>
					<li><a href="https://www.facebook.com/AresInternational/" rel="external"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCSPw61GBJBoCTlVNofCJusA" rel="external"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
		<figure class="center-block">
			<a href="./">
				<!-- <img class="center-block img-responsive" src="img/icons/logo.png" alt="ares"> -->
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="200px" height="65px" viewBox="0 0 200 65" enable-background="new 0 0 200 65" xml:space="preserve">
				<g>
					<path class="de" fill="#23c5c9" d="M35.353,20.237c2.328-0.232,4.653-1.628,6.047-2.79L45.356,0c-5.467,12.909-18.839,13.84-30.238,18.144
						C3.721,22.563,1.512,30.006,0.931,33.147C0.347,36.288,0,40.937,0,40.937h3.836v6.515h5.118v-10.12h-4.07
						c0-2.906,1.628-6.513,5-7.907c3.372-1.396,7.328,0.115,8.723,2.674c0.814,1.63,1.164,3.374,4.767,9.189
						c3.723,5.813,11.399,5.464,11.399,5.464l2.792-12.443c-1.166,0.233-2.326,0.349-3.954,0c-2.674-0.58-5.934-4.069-9.653-7.792
						c-3.839-3.72-12.212-1.861-12.212-1.861c1.047-0.928,5.233-1.975,8.84-1.395c4.419,0.815,8.022,5.351,11.394,6.979
						c2.096,0.931,4.654,0.58,6.282,0.231l2.558-10.583c-1.164,0.697-2.674,1.511-4.766,2.093c-4.074,0.931-9.19-1.279-13.377-1.977
						c-4.303-0.582-12.208,2.559-12.208,2.559c3.255-2.443,7.092-3.723,11.048-3.955c2.441-0.117,4.533,0.697,6.861,1.163
						C30.586,20.237,33.027,20.468,35.353,20.237"/>
					<path class="de" fill="#23c5c9" d="M39.192,49.542h3.835l0.815-2.208h-3.604c-1.514,0.118-4.073-0.233-4.653,2.792
						c-0.463,2.443,1.861,2.906,3.025,3.141c1.512,0.347,1.395,1.277,0.581,1.277H30.47v-1.277h3.606l0.58-2.443H30.47V49.66h4.537
						l0.697-2.208h-8.256v8.607L24.771,53.5c0,0,1.746-0.233,1.746-2.676c0-2.441-1.628-3.372-3.143-3.372h-1.161v2.09h0.581
						c0.58,0,0.58,0.351,0.58,0.7c0,0.466,0.118,1.164-0.23,1.164h-0.931v3.954l1.161,1.279h16.165c1.398,0,3.259-0.466,3.376-2.676
						c0.112-1.162-0.467-2.324-3.723-2.906C37.798,50.824,38.145,49.542,39.192,49.542 M22.213,47.452H17.91v7.092l-3.372-7.092h-1.745
						v3.489l0.814,1.628h-0.814v2.672h1.745l0.58,1.397h5.815v-2.676l1.281,1.397v-3.954h-1.281v-1.863h1.281V47.452z M12.793,47.452
						H8.954v9.187h2.908v-1.397h0.931v-2.672h-0.931v-3.258l0.931,1.63V47.452z"/>
					<text fill="#999999" x="60" y="30" style="font-size:22px;">ARES</text>
					<text class="de" fill="#23c5c9" x="58" y="55" style="font-size:25px;">資通電子報</text>
					<text id="y-m" fill="#999999" x="130" y="30" style="font-size:14px;">yyyy.mm</text>
				</g>
				</svg>
			</a>
			<!-- <figcaption id="y-m"></figcaption> -->
		</figure>
		<div class="sticky">
			<nav class="wrap">
				<ul class="text-center">
					<li><a href="focus">本月焦點</a></li>
					<li><a href="./#e">搶先 e 報</a></li>
<?php 
if($product && $product2){
	echo '<li><a href="./#product">產品特寫</a></li>';
}elseif($product && !$product2){
	echo '<li><a href="product">產品特寫</a></li>';
}

if($it && $it2){
	echo '<li><a href="./#it">技術交流</a></li>';
}elseif($it && !$it2){
	echo '<li><a href="it">技術交流</a></li>';
}
?>
<?= @$doctor ? '<li><a href="doctor">ERP 達人</a></li>' : '' ?>
<?php 
if($hcp && $hcp2){
	echo '<li><a href="./#hcp">HCP 專欄</a></li>';
}elseif($hcp && !$hcp2){
	echo '<li><a href="hcp">HCP 專欄</a></li>';
}
?>
<?= @$management ? '<li><a href="management">管理專欄</a></li>' : '' ?>
<?= @$job ? '<li><a href="Ares-jobs">菁英專欄</a></li>' : '' ?>
					<li><a href="cartoon">漫畫資通</a></li>
					<li><a href="./#info">資訊補給站</a></li>
					<li class="nav-hide">
						<ol>
		                    <li><a href="https://www.ares.com.tw/epaper/" rel="external">各期期刊</a></li>
		                    <li><a href="https://www.ares.com.tw/epaper/subscribe/" rel="external">訂閱/取消</a></li>
		                    <li><a href="https://www.ares.com.tw/" rel="external">資通首頁</a></li>
		                    <li><a href="mailto:marketing@ares.com.tw">意見信箱</a></li>
		                </ol>
					</li>
				</ul>
				<button id="nav-toggle" class="nav-hide"><i class="fa fa-bars" aria-hidden="true"></i></button>
				<div class="nav-hide fr mobile-icon">
					<a href="https://www.ares.com.tw/" rel="external">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px"
							 height="24px" viewBox="0 0 24 16" enable-background="new 0 0 24 24" xml:space="preserve">
							<g>
								<path fill="#999999" d="M17.371,8.575c0.987-0.098,1.973-0.689,2.563-1.182L21.609,0c-2.316,5.47-7.981,5.865-12.813,7.688
									c-4.829,1.873-5.766,5.027-6.012,6.357c-0.247,1.332-0.395,3.301-0.395,3.301h1.626v2.761h2.168v-4.289H4.46
									c0-1.231,0.689-2.76,2.119-3.351c1.429-0.591,3.105,0.049,3.697,1.133c0.344,0.69,0.493,1.43,2.02,3.894
									c1.578,2.463,4.829,2.315,4.829,2.315l1.184-5.273c-0.493,0.099-0.985,0.148-1.676,0c-1.133-0.246-2.515-1.724-4.09-3.302
									c-1.626-1.577-5.175-0.789-5.175-0.789c0.443-0.394,2.218-0.837,3.745-0.591c1.874,0.345,3.399,2.268,4.828,2.958
									c0.888,0.394,1.973,0.245,2.663,0.098l1.083-4.484c-0.492,0.295-1.133,0.641-2.02,0.887C15.941,9.709,13.773,8.772,12,8.477
									C10.177,8.23,6.825,9.561,6.825,9.561c1.381-1.035,3.006-1.577,4.683-1.676c1.035-0.049,1.921,0.295,2.909,0.493
									C15.352,8.575,16.386,8.673,17.371,8.575"/>
								<path fill="#999999" d="M18.997,20.994h1.627l0.345-0.936h-1.527c-0.641,0.049-1.726-0.099-1.972,1.182
									c-0.196,1.035,0.789,1.232,1.283,1.331c0.639,0.148,0.591,0.542,0.244,0.542h-3.695v-0.542h1.527l0.246-1.034h-1.773v-0.494h1.922
									l0.297-0.935h-3.498v3.647l-1.136-1.084c0,0,0.741-0.099,0.741-1.133c0-1.035-0.69-1.429-1.332-1.429h-0.492v0.886h0.246
									c0.246,0,0.246,0.148,0.246,0.296c0,0.197,0.048,0.493-0.098,0.493h-0.395v1.675L12.296,24h6.849c0.594,0,1.383-0.197,1.431-1.134
									c0.049-0.492-0.197-0.984-1.578-1.231C18.407,21.537,18.555,20.994,18.997,20.994 M11.804,20.107H9.98v3.006l-1.429-3.006h-0.74
									v1.479l0.346,0.689H7.812v1.133h0.74L8.797,24h2.464v-1.134l0.543,0.592v-1.675h-0.543v-0.789h0.543V20.107z M7.812,20.107H6.185
									V24h1.232v-0.592h0.395v-1.133H7.417v-1.38l0.395,0.691V20.107z"/>
							</g>
						</svg>
					</a>
					<a href="https://www.facebook.com/AresInternational/" rel="external"><i class="fa fa-facebook"></i></a>
					<a href="https://www.youtube.com/channel/UCSPw61GBJBoCTlVNofCJusA" rel="external"><i class="fa fa-youtube"></i></a>
				</div>
				<div class="clearfix"></div>
			</nav>
		</div>
	</header>