<?php
	function verify_recaptcha($response) {
    $secret_key = '6LeT-h8qAAAAAH8fav-1ynKTAPkI_eMdNjaGGdIj';
    $remote_ip = $_SERVER['REMOTE_ADDR'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$response}&remoteip={$remote_ip}");
    $response_keys = json_decode($response, true);

    return intval($response_keys['success']) === 1;
  }

	function handle_recaptcha() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$recaptcha_response = $_POST['recaptcha-response'];

			if (verify_recaptcha($recaptcha_response)) {
				// Process form submission
				echo 'Form submitted successfully!';
			} else {
				echo 'reCAPTCHA verification failed. Please try again.';
			}
		}
	}
?>