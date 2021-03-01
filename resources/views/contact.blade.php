<!doctype html>
<html class="no-js">
<head>
		<meta charset="utf-8"/>
		<title>PORTFOLIO</title>
		<link rel="stylesheet" media="all" href="{{ asset("css/style.css") }}"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>	
		<script src="/js/jquery-1.6.4.min.js"></script>
		<script src="/js/css3-mediaqueries.js"></script>
		<script src="/js/custom.js"></script>
		<script src="/js/tabs.js"></script>	
       
		<link rel="stylesheet" media="screen" href="{{ asset("css/superfish.css") }}" /> 
		<script  src="/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="/js/superfish-1.4.8/js/supersubs.js"></script>	
		<script  src="/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="{{ asset("js/prettyPhoto/css/prettyPhoto.css") }}"  media="screen" />		
		<link rel="stylesheet" href="{{ asset("js/poshytip-1.1/src/tip-twitter/tip-twitter.css") }}"  />
		<link rel="stylesheet" href="{{ asset("js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css") }}"  />
		<script  src="/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>		
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>		
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="/js/jquery.flexslider-min.js"></script>		
		<script src="/js/masonry.min.js" ></script>
		<script src="/js/imagesloaded.js" ></script>
		<link rel="stylesheet" media="all" href="{{ asset("css/lessframework.css") }}"/>
		<script src="/js/modernizr.js"></script>
		<link rel="stylesheet" media="all" href="{{ asset("css/skin.css") }}"/>
	</head>
	
	<body lang="en">	
		<header>
			<div class="wrapper clearfix">
			<ul id="nav" class="sf-menu">
					<li><a href="welcome">HOME</a></li>
					<li><a href="about">ABOUT ME</a></li>
					<li class="current-menu-item"><a href="contact">CONTACT ME</a></li>
				</ul><select id="comboNav">
					<option value="index.html" >HOME</option>
					<option value="blog.html">ABOUT ME</option>
					<option value="contact.html" selected="selected">CONTACT</option>
				</select></div>
		</header>
	<div id="main">	
			<div class="wrapper clearfix">
			<div class="masthead clearfix">
					<h1>CONTACT ME</h1><span class="subheading">GET IN TOUCH</span>
				</div>
				<div class='mh-div'></div>
				<div id="page-content" class="clearfix"> 
	        		
					
	        		<div class='section-div'></div>
	        		
					<div class="left-page-block">
						<h4 class="heading">Contact form</h4>
						<script type="text/javascript" src="js/form-validation.js"></script>
						<form id="contactForm" action="#" method="post">
							<fieldset>
								<div>
									<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
									<label>Name</label>
								</div>
								<div>
									<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
									<label>Email</label>
								</div>
								<div>
									
									<input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website" />
									<label>Website</label>
								</div>
								<div>
									<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
								</div>
								<input type="hidden" value="your@email.com" name="to" id="to" />
								<input type="hidden" value="ENter the subject here" name="subject" id="subject" />
								<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
								<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
							</fieldset>
						</form>
						<p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
					</div>
					
					<div class="right-page-block">
						<h4 class="heading">Address info</h4>
						
		        		<ul class="address-block">
		        			<li class="address">c.Atyrau, street 'Mangilik el'</li>
		        			<li class="phone">+123 456 789</li>
		        			<li class="mobile">+123 456 789</li>
		        			<li class="email"><a href="">190103477@stu.sdu.edu.kz</a></li>
		        		</ul>
					</div>
        		</div>
			<div id="fold"></div>
			</div>
			
		</div>
	
		<footer>	
			<div class="wrapper clearfix">
				<div class="footer-bottom">
					<div class="left">Feel free to contact me (this is my Telegram) <a href="https://t.me/inabvt" >@inabvt</a></div>
		 		</div>	
			</div>
		</footer>
		
			
	</body>
	
</html>