<?php
	
	if(isset($_POST['signed_request'])) {
	
		$request = parse_signed_request($_POST['signed_request'], $secret);
		$page = $request['page'];
		$user = $request['user'];
		$user_id = $request['user_id'];
		
		// Get specific page information
		$page_id = $page['id'];
		$likes = $page['liked'];
		if($likes == '') { $likes = FALSE; } else { $likes = TRUE; }
		$admin = $page['admin'];
		$data = $request['app_data'];
		
		// Get specific user information
		$country = $user['country'];
		$locale = $user['locale'];
		$age_min = $user['age']['min'];
		$age_max = $user['age']['max'];
		
	} else {
		
		$request = FALSE;
		
	}
	
	if($needs_permission == TRUE) {
		if($user_id == '' || $user_id == FALSE) {
			$dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" . $app_id . "&redirect_uri=" . urlencode($on_facebook_url);
			echo("<script> top.location.href='" . $dialog_url . "'</script>");
	    }	
	}
	
	$api_url = $install_url . "api/";


?>