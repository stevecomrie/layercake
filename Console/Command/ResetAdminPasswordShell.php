<?php
/**
 * Reset the Admin Password
 *
 */
class ResetAdminPasswordShell extends AppShell {
    
    // configuration
    var $uses       = array( 'LayerCake.Admin' );
    
    // main function call
    public function main() {
        
        $this->out( "", 1 );
        
        // find the admin to update
        $admin = $this->Admin->find( 'first', array(
            'conditions' => array(
                'OR' => array( 'username' => 'admin', 'id' => 1 )
            )
        ));
        
        // load auth component to hash password
        App::uses('AuthComponent', 'Controller/Component');        
        
        // if we found an admin record - update the password
        if( isset( $admin['Admin'] ) ) {
            
            // get new admin password
            $new_password = $this->in( 'New Admin Password:', NULL, 'admin' );
            $this->out( "", 1 );
            
            // save the password
            $this->Admin->save( array( 'Admin' => array(
                'id'       => $admin['Admin']['id'],
                'password' => AuthComponent::password( $new_password ),
            )));
            
            // output message
            $this->out( "Updated Record\n-----------------\n  Username: " . $admin['Admin']['username'] . "\n  Password: " . $new_password, 1 );
        
        // if we didn't find an admin, assume that we need to add one
        } else {
            
            // get new admin email address
            $this->out( "Could not find admin record, adding a new one", 1 );
            $email = $this->in( "Enter email address for admin user:" );
            $this->out( "", 1 );
            
            // get new admin password
            $new_password = $this->in( 'New Admin Password:', NULL, 'admin' );
            $this->out( "", 1 );            
            
            // save the password
            $this->Admin->create();
            $this->Admin->save( array( 'Admin' => array(
                'name'     => 'Administrator',
                'email'    => $email,
                'username' => 'admin',
                'password' => AuthComponent::password( $new_password ),
            )), 0 );
            
            // output message
            $this->out( "Added New Record\n-----------------\n  Username: admin\n  Password: " . $new_password, 1 );
        }
        
        $this->out( "", 1 );
    }
}