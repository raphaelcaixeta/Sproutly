<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<title>Sproutly | Liked</title>
<script src="//connect.facebook.net/en_US/all.js"></script>
</head>

<body>
	
	<!-- They like your page. -->	
	
</body>
<script>
	window.fbAsyncInit = function() {
	  FB.init({
	    appId      : '<?php echo $app_id; ?>', // App ID
	    channelUrl : '<?php echo $on_facebook_url; ?>', // Channel File
	  });
	  FB.Canvas.setAutoGrow();
	}
</script>
</html>