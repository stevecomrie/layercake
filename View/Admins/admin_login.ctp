<? $this->set( 'title_for_layout', "Login" ); ?>

<?= $this->Form->create( "Admin", array( 'url' => '/admin/admins/login' ) ); ?>
<?= $this->Form->input( "username", array( "tabindex" => 1 ) ); ?>
<?= $this->Form->input( "password", array( "tabindex" => 2 ) ); ?>
    
<? if( 0 ): ?>
    <div class="input">
        <label><?= $this->Form->checkbox( "remember" ); ?> Remember me</label>
    </div>
<? endif; ?>
    
<?= $this->Form->end( array( "tabindex" => 3, "label" => "Login" ) ); ?>
<p class="spacer"><a href="/admin/admins/forgot">Forgot your password?</a></p>