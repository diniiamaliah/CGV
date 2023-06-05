
<!DOCTYPE html>
<html>
<head>
	<meta itemprop="name" content="CGV Indonesia | Evolving beyond Movies">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-language" content="id, en">
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="must-revalidate, max-age=3600" />
		<meta name="keywords" content="cgv, cgv indonesia, cultureplex, blitz, blitzmegaplex, movie, bioskop, cinema, ticket, film, premiere, velvet, 4dx, gold class, spherex, screenx, sweetbox, 3d">
	<meta name="description" content="CGV Indonesia - Evolving beyond Movies">
	<meta name="author" content="CGV">
	<meta name="copyright" content="© 2015 CJ CGV All Right Reserved">
	<title>Login - CGV Cinemas</title>

</head>

<body>
	<div id="fb-root"></div>
	<div class="main-container">
		<div class="main-wrapper">
			<div class="main-header-container">
								<div class="top-banner" style="background-image:url(https://cdn.cgv.id/assets/global/img/top-banner-default.jpg); background-repeat: repeat; background-size: contain;">
					<div class="banner-wrapper">
						<div style="padding:5px;">
							<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1505511952227201"
								crossorigin="anonymous"></script>
							<!-- Header ad -->

						</div>
					</div>
				</div>
				<div class="top-util">
					<div class="top-util-menu left">
						<ul class="socmed">
							<li><a href="https://www.facebook.com/cgv.id" target="_blank"><i class="fb-icon"></i>Like</a></li>
							<li><a href="https://twitter.com/cgv_id" target="_blank"><i class="tw-icon"></i>Follow</a></li>
							<li><a href="https://www.instagram.com/cgv.id/" target="_blank"><i class="ig-icon"></i>Follow</a></li>
							<li><a href="https://line.me/R/ti/p/%40cgv_id" target="_blank"><i class="ln-icon"></i>Follow</a></li>
							<li><a href="https://www.youtube.com/cgvkreasi/" target="_blank"><i class="yt-icon"></i>Subscribe</a></li>
						</ul>
					</div>
					<div class="top-util-menu right">
						<ul class="special-menu">
							<li><a href="https://www.cgv.id/en/events/all">news</a></li>
															<li><a href="">login</a></li>
								<li><a href="">sign up</a></li>
														<li></li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
				<header>
                    @include('includes.header')
									</header>
				<div class="clear"></div>
				
			</div>

				<script src='https://www.google.com/recaptcha/api.js'></script>
	<div class="main-body-container">
		<div class="body-wrapper">
			<div class="login-section">
				<div class="login-tab-panel" role="tabpanel">
					<ul class="nav nav-tabs" id="login-tab" role="tablist">
						<li role="presentation" class="active"><a href="#">Login</a></li>
						<li role="presentation"><a href="https://www.cgv.id/en/user/register">Sign Up</a></li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="login">
														<div class="form-group login">
								<form action="{{ route('login')}}" method="post" >
									@csrf
									{{-- <input type="hidden" name="_token" value="DYP0JKw9IomXpgxNThcp2Yq7f7bSMDhVbfVRM5LQ">									<div class="form-msg"> --}}
										Login with your web profile
									</div>
									<div class="input-group">
										<i class="fa fa-user"></i>
										<input type="text" name="email" value="" placeholder="email" autocomplete="off" />
									</div>
									@error('username')
										<div class="validationServer03Feedback" class = "invalid-feedback">
											{{ 'message' }}
										</div>
										@enderror
									<div class="input-group">
										<i class="fa fa-unlock-alt"></i>
										<input type="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
									@error('password')
										<div class="validationServer03Feedback" class = "invalid-feedback">
											{{ 'message' }}
										</div>
										@enderror
									<div class="input-group">
										<input type="submit" value = "login"/>
									</div>
									<div class="input-group">
										<div class="forgot-pass">
											<a href="https://www.cgv.id/en/user/forgot_password">Forgot Password?</a>
										</div>
									</div>
								</form>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="clear"></div>
			<div class="bottom-banner">
				<div class="banner-wrapper">							</div>
			</div>
			<div class="main-footer-container">
				<div class="main-footer-wrapper">
					<div class="feature-list">
						<ul>
							<li><a href="#" class="dx">4DX</a></li>
							<li><a href="#" class="screenx">SCREENX</a></li>
							<li><a href="#" class="spherex">SPHEREX</a></li>
							<li><a href="#" class="starium">STARIUM</a></li>
							<li><a href="#" class="dolby">DOLBY ATMOS</a></li>
							<li><a href="#" class="velvet">VELVET</a></li>
							<li><a href="#" class="gold">GOLDCLASS</a></li>
							<li><a href="#" class="satin">SATIN</a></li>
							<li><a href="#" class="sweet">SWEETBOX</a></li>

						</ul>
					</div>
					<div class="info-wrapper">
						<h2 class="footer-logo">CGVblitz</h2>
						<div class="footer-menu">
							<ul>
								<li><a href="https://www.cgv.id/en/content/about_us">About Us</a></li>
								<li><a href="https://www.cgv.id/en/content/legal_term">Legal Terms</a></li>
								<li><a href="https://www.cgv.id/en/content/careers">Careers</a></li>
								<li><a href="https://www.cgv.id/en/content/feedback">Feedback</a></li>
								<li><a href="https://www.cgv.id/en/content/contact">Contact Us</a></li>
								<li><a href="https://www.cgv.id/en/content/investor_relation">Investor Relation</a></li>
							</ul>
						</div>
						<div class="footer-address">
							<div class="ssl-logo-wrap">
								<a href='https://play.google.com/store/apps/details?id=com.blitz.blitzandapp1&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank">
									<img alt='Get it on Google Play' src='https://cdn.cgv.id/assets/global/img/en_badge_web_generic.png' width="140"/>
								</a>
								<a href="https://itunes.apple.com/id/app/cgv-blitz/id781405923?mt=8" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/images/badges/en-us/badge_appstore-lrg.svg) no-repeat;width:135px;height:38px;margin-bottom: 8px;" target="_blank"></a>

							</div>
							<p class="copyright">COPYRIGHT 2023. CJ CGV All RIGHTS RESERVED.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@include('includes.cdn')
</body>

</html>
