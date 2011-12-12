<?php

class LayerCakeAppController extends AppController {

	var $helpers    = array( 'Html', 'Form', 'Session', 'LayerCake.Cycle', 'LayerCake.MenuTree' );
    var $components = array( 'Session', 'Auth' );
	
	function beforeFilter() {
        parent::beforeFilter( );
        
        // Pass settings in
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array( 'userModel' => 'LayerCake.Admin' ),
            'Form',
            'Basic'
        );
        
		$this->Auth->loginAction    = '/admin/admins/login';
        $this->Auth->loginRedirect  = '/admin/dashboard';
		$this->Auth->logoutRedirect = '/admin/admins/login';
		
		if( isset( $this->params['prefix'] ) && $this->params['prefix'] == 'admin' ) {
            $this->layout = 'admin_default';
        }
    }
}