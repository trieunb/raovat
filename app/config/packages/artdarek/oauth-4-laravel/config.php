<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1671697466387668',
            'client_secret' => '16338b2038ccf218bcd9dfcbec95e6d0',
            'scope'         => array('email'),
        ),	
        'Google' => array(
		    'client_id'     => '945035754502-m7cnst134co70m8nooeqjhudp4psq39u.apps.googleusercontent.com',
		    'client_secret' => '8X9P_fDMQaRJa6lRMTx3pX4Z',
		    'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  	

	)

);