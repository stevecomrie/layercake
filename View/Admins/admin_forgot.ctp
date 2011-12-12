<? $this->set( 'title_for_layout', "Forgot Your Password" ); ?>

<?= $this->Form->create( "Admin", array( 'url' => '/admin/admins/forgot' ) ); ?>
<?= $this->Form->input( "email" ); ?>

<?= $this->Form->end( array( "label" => "Submit" ) ); ?>

<p class="spacer"><a href="/admin/admins/login">Return to Login</a></p>