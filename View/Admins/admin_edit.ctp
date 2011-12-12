<h1>Edit Account Settings</h1>

<?= $this->Form->create('Admin', array( 'autocomplete' => 'off' ) ); ?>
<?= $this->Form->input('id' ); ?>

<div class="form-left">
    <?= $this->Form->input('username'); ?>
    <?= $this->Form->input('name'); ?>
    <?= $this->Form->input('email'); ?>
    
    <?= $this->Form->input( 'new_password_1', array( 'type' => 'password', 'label' => 'New Password' ) ); ?>
    <?= $this->Form->input( 'new_password_2', array( 'type' => 'password', 'label' => 'Repeat Password' ) ); ?>
</div>
<div class="clear"></div>

<?= $this->Form->end( array( 'label' => 'Save' ) );?>
<p class="spacer">or ...</p>
<p class="cancel"><a href="/admin/dashboard">cancel</a></p>


