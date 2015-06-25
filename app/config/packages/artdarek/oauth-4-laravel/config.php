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
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),	
        'Google' => array(
		    'client_id'     => '678157578033-c1tlnh8maqo8goitff8dqujsfejne6d9.apps.googleusercontent.com',
		    'client_secret' => 'FrAL0sD_LE6bOvPzcTeGuBm0',
		    'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  	

	)

);