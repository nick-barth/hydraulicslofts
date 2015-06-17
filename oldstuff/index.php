<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buffalo Hydraulics Lofts - Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tools/jquery.min.js"></script>
<script type="text/javascript" src="tools/cufon-yui.js"></script>
<script type="text/javascript" src="tools/Abraham_Lincoln_400.font.js"></script>
<script type="text/javascript" src="tools/Inspiration_400.font.js"></script>
<script type="text/javascript" src="tools/Museo_Slab_100_400-Museo_Slab_700_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('.logo h1', {fontFamily: 'Inspiration'});
	Cufon.replace('.logo h2', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('.logo h2 span', {fontFamily: 'Abraham Lincoln'});
	Cufon.replace('p.big_text, p.small_text', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('p.big_text strong, p.small_text strong', {fontFamily: 'Museo Slab 700'});
</script>
<script type="text/javascript">
function validate() {
var email = $('input[name=email]').val();

if( /(.+)@(.+){2,}\.(.+){2,}/.test(email) ){
  // valid email
} else {
  alert('Please enter a valid email address!'); return false;
}
}
</script>
</head>
<body>
<div id="transy">
</div>
<div id="wrapper">
	<div class="logo"><p style="margin-bottom:30px;text-align:center"><img src="images/hl_new_logo.png" alt="Hydraulics Lofts"/></p><h2><strong class="one"></strong>Buffalo luxury living<strong class="two"></strong></h2></div>
	<div class="content">
		<p class="big_text"><strong>Buffalo's newest luxury living</strong> is coming soon!</p>
		<p class="small_text"><strong>be notified first.</strong> we just need your email address.</p>
		<div class="form">
			<div class="field_content">
				<form action="go.php" method="POST" name="contactform" id="emailform" onsubmit="return validate()">
					<input class="field" type="email" name="email" />
					<input class="submit" type="submit" value="" />
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<p style="text-align:center;margin-top:60px">
			<a href="https://www.facebook.com/500Seneca"><img src="images/facebook.png" alt="Facebook"/></a>
		</p>
	</div>
</div>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-62344473-1', 'auto');
ga('send', 'pageview');

</script>
</body>
</html>
