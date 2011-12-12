<?php $this->set( 'title_for_layout', "Forgot Your Password" ); ?>

<?php echo $this->Form->create( "Admin", array( 'url' => '/admin/admins/forgot' ) ); ?>
<?php echo $this->Form->input( "email" ); ?>

<?php echo $this->Form->end( array( "label" => "Submit" ) ); ?>

<p class="spacer"><a href="/admin/admins/login">Return to Login</a></p>