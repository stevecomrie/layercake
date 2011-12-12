<?
class AdminModule extends LayerCakeAppModel {

	var $name     = 'AdminModule';
	var $validate = array( );
    
    function active_modules() {         
        return $this->find( 'threaded', array(
            'conditions' => array( 'active' => 1, 'visible' => 1 ),
            'order'      => 'ordering ASC',
        ));
    }   
}