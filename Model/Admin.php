<?
class Admin extends LayerCakeAppModel {

	var $name = 'Admin';
	var $validate = array(
		'username' => array('notempty'),
		'password' => array('notempty'),
		'email'    => array('email')
	);
    
    
    function beforeValidate() {
        
        // make sure that new passwords match
        if( !empty( $this->data['Admin']['new_password_1'] ) || !empty( $this->data['Admin']['new_password_2'] ) ) {
            if( $this->data['Admin']['new_password_1'] != $this->data['Admin']['new_password_2'] ) {
                $this->invalidate( 'new_password_1', "Passwords don't match" );    
            }
        }
        
        // make sure that email is unique
        if( isset( $this->data[$this->name]["email"] ) ) {
            if( !$this->isUnique( array(
                'email'       => $this->data[$this->name]["email"]
            ), $this->id )) { $this->invalidate( 'email', "Another administrator with that email address already exists in the system." ); }            
        }
        
        // make sure that username is unique
        if( isset( $this->data[$this->name]["username"] ) ) {
            if( !$this->isUnique( array(
                'username'       => $this->data[$this->name]["username"]
            ), $this->id )) { $this->invalidate( 'username', "Another administrator with that username already exists in the system." ); }
        }
       
        return true;
    }
    

    function beforeSave() {
        
        // if there's a new password, hash it, before saving it
        if (isset($this->data['Admin']['new_password_1'])) {
            $this->data['Admin']['password'] = Security::hash( $this->data['Admin']['new_password_1'], null, true );
        }
        
        // if there's a new password, hash it, before saving it
        if (isset($this->data['Admin']['new_password'])) {
            $this->data['Admin']['password'] = Security::hash( $this->data['Admin']['new_password'], null, true );
        }        
        
        return true;
    }   
}