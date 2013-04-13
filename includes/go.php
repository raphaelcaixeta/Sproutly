<?php

	if(!$install_page) {
		
		session_start();
		
		$on_facebook_url = str_replace(array("&sk=app_$app_id&", "&sk=app_$app_id", "?sk=app_$app_id",), '', $on_facebook_url);
		if(strstr($on_facebook_url, '?')) {
			$on_facebook_url .= "&sk=app_$app_id";
		} else {
			$on_facebook_url .= "?sk=app_$app_id";
		}
		
		include('functions.php');
		include('setup.php');
		
		if(($user_id == '' || $user_id == FALSE) && $needs_permission == TRUE) {
		    $dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" . $app_id . "&redirect_uri=" . urlencode($on_facebook_url) . "&scope=" . $permissions_string;
		    echo("<script>top.location.href='" . $dialog_url . "'</script>");	
		}
		
	}

?>