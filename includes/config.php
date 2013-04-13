<?php

	/* FACEBOOK APP ID */
	$app_id = '';
	
	/* FACEBOOK APP SECRET */
	$secret = '';
		
	/* FACEBOOK PAGE URL */
	/*
		Note: This is the URL BEFORE the "?sk" portion.
		We'll try to clean the URL up for you, but if you notice something wrong, please double check!
	*/
	$on_facebook_url = "";
	
	/* INSTALLATION URL */
	/*
		Full URL to where these files are being uploaded
		Example: http://localhost:8888/sproutly/
		Note: Don't forget the trailing slash at the end!
	*/
	$install_url = "";
	
	/* 
		DO YOU NEED SPECIAL PERMISSIONS IN ORDER FOR A USER TO USE YOUR FACEBOOK TAB?
		VALUES: TRUE, FALSE
		Example: $needs_permission = TRUE
		Example #2: $needs_permission = FALSE
	*/	
	$needs_permission = FALSE;
	
	/* 
		IF THE ABOVE IS TRUE, ENTER EACH PERMISSION REQUIRED BELOW.
		SEPARATE EACH PERMISSION BY A COMMA ","
		Example: user_about_me,friends_about_me,email
		List of permissions: https://developers.facebook.com/docs/reference/api/permissions/
	*/
	$permissions_string = '';
	
	/* DO NOT TOUCH ANYTHING HERE */
	include('go.php');	
	
?>