<?php
	
	function parse_signed_request($signed_request, $secret) {
		
		list($encoded_sig, $payload) = explode('.', $signed_request, 2);
		$sig = base64_url_decode($encoded_sig);
		$data = json_decode(base64_url_decode($payload), true);
		if(strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
			error_log('Unknown algorithm. Expected HMAC-SHA256');
			return null;
		}
		$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
		if($sig !== $expected_sig) {
			error_log('Bad Signed JSON signature!');
			return null;
		}
		return $data;
		
	}
	
	function base64_url_decode($input) {
		return base64_decode(strtr($input, '-_', '+/'));
	}
		
	function sprout_js($output = TRUE) {
		if($output) {
			echo '<div id="fb-root"></div>',"\n",'<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>',"\n",'<script type="text/javascript" charset="utf-8">',"\n\t",'FB.Canvas.setSize();',"\n",'</script>';
		} else {
			return '<div id="fb-root"></div>' . "\n" . '<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>' . "\n" . '<script type="text/javascript" charset="utf-8">' . "\n\t" . 'FB.Canvas.setSize();' . "\n" . '</script>';
		}
	}
	
	function output($output_file) {
		$file_contents = file_get_contents($output_file);
		$file_contents = explode("</body>", $file_contents);
		$file_contents = $file_contents[0] . sprout_js(FALSE) . "\n</body>" . $file_contents[1];
		die($file_contents);
	}

?>