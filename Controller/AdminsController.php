<?

class AdminsController extends LayerCakeAppController {

	var $name       = 'Admins';
	var $helpers    = array( 'Html', 'Form' );    
	
	function beforeFilter() {
		parent::beforeFilter( );
		$this->Auth->allow( 'admin_login', 'admin_forgot', 'admin_index', 'admin_logout' );
		$this->layout = 'admin_small_box';
	}
	
	function admin_index() {
		$this->redirect( '/admin/admins/login' );
	}
	
	function admin_login() {
        if ($this->request->is('post')) {
            if( $this->Auth->login() ) {
                return $this->redirect( $this->Auth->redirect() );
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }
	}
	
	function admin_logout() {
		$this->Session->setFlash( __('You have been logged out'), 'default', array( 'class' => 'message' ) );
		$this->redirect( $this->Auth->logout() );
	}
	
    
	function admin_forgot() {
        
        if(!empty($this->data)) {
            
            $admin = $this->Admin->findByEmail( $this->data['Admin']['email'] );

            if( $admin['Admin']['email'] ) {
            
                // generate a new default password
                $words      = array('amber','badger','beaver','bedroom','black','bread','brother','brown','bucket','butter','camping','canary','castle','chain','chance','cheese','chicken','chipmunk','circle','circus','coach','crayon','crimson','dolphin','donkey','dragon','dream','drink','eagle','elbow','elephant','erase','father','feather','ferret','finish','fresh','green','hamster','hello','jacket','jeans','jelly','large','listen','lizard','locker','lucky','maybe','monkey','monster','morning','mother','orange','otter','panda','parrot','pencil','people','police','purple','rabbit','scarf','school','score','secret','shadow','sheep','sister','smash','smell','snake','snowball','socks','sparkle','spray','sprout','thank','thick','ticket','tiger','toad','toast','today','tooth','touch','trail','trick','uncle','video','violet','visit','walrus','whale','white','winter','wolf','worm','yellow','zebra');
                $digits     = '0123456789';
                $password   = $words[array_rand($words)];
                for ($i = 0; $i < 3; $i++ ) { $password .= $digits[rand(0, strlen($digits) - 1)]; }
                $admin['Admin']['password'] = $password;
            
                // save new password
                $this->Admin->save( array( "Admin" => array(
                    "id"            => $admin['Admin']['id'],
                    "new_password"  => $admin['Admin']['password'],
                )));

                // get web master email
                $host_names = explode( ".", $_SERVER['HTTP_HOST'] );
                $email_from = 'webmaster@' . $host_names[count($host_names)-2] . "." . $host_names[count($host_names)-1];
                
                // prepare the email envelope
                App::uses('CakeEmail', 'Network/Email');
                $email = new CakeEmail();
                $email->from( array( $email_from => 'Webmaster' ) );
                $email->to($admin['Admin']['email']);
                $email->subject('Password Reset');
                $email->emailFormat( 'both' );
                $email->template( 'password_reset', 'default' );
                $email->viewVars( array(
                    'from'  => $email_from,
                    'admin' => $admin,
                ));
                
                // send the email
                $email->send();
            
                $this->Session->setFlash( 'Reminder Email Sent', 'default', array('class' => 'success') );
                $this->redirect( '/admin/admins/login' );
            }
            
            $this->Session->setFlash( 'Admin User Not Found', 'default', array('class' => 'error') );
        }
    }


    function admin_update() {
        $admin = $this->Auth->user();
        $this->redirect( "/admin/admins/edit/" . $admin['id'] . "/" );
    }


	function admin_edit( $id = null ) {

        $this->layout = 'admin_default';
        
        $admin = $this->Auth->user();
        
        if( ( !$id && empty($this->data) ) || $id != $admin['id'] ) {
            $this->Session->setFlash( 'Invalid Admin', 'default', array('class' => 'error') );
			$this->redirect( "/admin/dashboard/" );
		}
        
		if( !empty($this->data) ) {
			if ($this->Admin->save( $this->data )) {
                $this->Session->setFlash( 'The Admin has been saved', 'default', array('class' => 'success') );
				$this->redirect( "/admin/dashboard/" );
			} else {
                $this->Session->setFlash( 'The Admin could not be saved. Please, try again.', 'default', array('class' => 'error') );
			}
		}
        
		if( empty($this->data) ) {
			$this->data = $this->Admin->read( null, $id );
		}
	}
}