<?php

add_action( 'wp_ajax_post_contato', 'filter_post_contato' );
add_action( 'wp_ajax_nopriv_post_contato', 'filter_post_contato' );
function filter_post_contato() {

	$response = array();
	if ($_POST)
	{
		$form = $_POST;
		// if(checkReCaptcha($form))
		// {
			add_contato($form['fitlers']);
			send_mail_wp($form['fitlers']);
			$response['status'] = 'Sucesso';
			$response['mensagem'] = 'Mensagem enviada com sucesso.';
		// }
		// else
		// {
		// 	$response['status'] = 'Erro';
		// 	$response['mensagem'] = 'Error tente novamente mais tarde.';
		// }	
	}
    exit( json_encode( $response ) );
}