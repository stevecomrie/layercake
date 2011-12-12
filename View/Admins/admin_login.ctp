<?php $this->set( 'title_for_layout', "Login" ); ?>

<?php echo $this->Form->create( "Admin", array( 'url' => '/admin/admins/login' ) ); ?>
<?php echo $this->Form->input( "username", array( "tabindex" => 1 ) ); ?>
<?php echo $this->Form->input( "password", array( "tabindex" => 2 ) ); ?>
    
<?php if( 0 ): ?>
    <div class="input">
        <label><?php echo $this->Form->checkbox( "remember" ); ?> Remember me</label>
    </div>
<?php endif; ?>
    
<?php echo $this->Form->end( array( "tabindex" => 3, "label" => "Login" ) ); ?>
<p class="spacer"><a href="/admin/admins/forgot">Forgot your password?</a></p>