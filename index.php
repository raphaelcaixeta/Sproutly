<?php if(isset($_GET['install'])) { ?>
	
	<?php
		$install_page = TRUE;
		include('includes/config.php');
	?>

	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="UTF-8" />
	<title>Sproutly | Install your Facebook Tab</title>
	<style type="text/css">
		body { width: 800px; height: 800px; text-align: center; margin: 0 auto; padding-top: 50px; }
		a { display: block; padding: 10px 5px 10px 5px; margin-top: 20px; background: #325c98; border: 1px solid #6f9ad7; color: #FFF; text-decoration: none; font-family: Verdana, Arial; font-size: 14px; text-transform: uppercase; width: 400px; margin: 0 auto; }
		a:hover { border: 1px solid #1c4279; background: #1a3c6c; }
		p { display: block; font-family: Arial, Verdana; font-size: 18px; font-weight: bold; }
		p.copyright a { display: inline; padding: 0 0; margin: none; background: none; border: none; color: #325c98; text-decoration: underline; width: auto; }
	</style>
	<script>
		function install() {
			window.open("http://www.facebook.com/dialog/pagetab?app_id=<?php echo $app_id; ?>&next=http://facebook.com/","Install Tab","width=800,height=500");
		}
	</script>
	</head>

	<body>
		
		<?php if($app_id == '' || $secret == '' || $on_facebook_url == '' || $install_url == '') { ?>
			
			<p>Looks like you forgot to configure a few settings in the "includes/config.php" file.</p>
			<p class="copyright"><a href="http://developer.gripd.com/sproutly.php" target="_blank">Sproutly</a>; a <a href="http://gripd.com/" target="_blank">Grip'd</a> project</p>
			
		<?php } else { ?>

			<a href="#" onclick="install();");>Install Tab</a>
			<p>Click the button above to install your Facebook Tab</p>
			<p class="copyright"><a href="http://developer.gripd.com/sproutly.php" target="_blank">Sproutly</a>; a <a href="http://gripd.com/" target="_blank">Grip'd</a> project</p>
			
		<?php } ?>
		
	</body>
	</html>

<?php } else { ?>
	
	<?php include('includes/config.php'); ?>
	<?php if($app_id == '' || $secret == '' || $on_facebook_url == '' || $install_url == '') { ?>

		<!DOCTYPE html>
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta charset="UTF-8" />
		<title>Sproutly | Install your Facebook Tab</title>
		<style type="text/css">
			body { width: 800px; height: 800px; text-align: center; margin: 0 auto; padding-top: 50px; }
			a { display: block; padding: 10px 5px 10px 5px; margin-top: 20px; background: #325c98; border: 1px solid #6f9ad7; color: #FFF; text-decoration: none; font-family: Verdana, Arial; font-size: 14px; text-transform: uppercase; width: 400px; margin: 0 auto; }
			a:hover { border: 1px solid #1c4279; background: #1a3c6c; }
			p { display: block; font-family: Arial, Verdana; font-size: 18px; font-weight: bold; }
			p.copyright a { display: inline; padding: 0 0; margin: none; background: none; border: none; color: #325c98; text-decoration: underline; width: auto; }
		</style>
		<script>
			function install() {
				window.open("http://www.facebook.com/dialog/pagetab?app_id=<?php echo $app_id; ?>&next=http://facebook.com/","Install Tab","width=800,height=500");
			}
		</script>
		</head>

		<body>

			<p>Looks like you forgot to configure a few settings in the "includes/config.php" file.</p>
			<p class="copyright"><a href="http://developer.gripd.com/sproutly.php" target="_blank">Sproutly</a>; a <a href="http://gripd.com/" target="_blank">Grip'd</a> project</p>

		</body>
		</html>
		
	<?php } else { include('fbpage.php'); } ?>
	
<?php } ?>