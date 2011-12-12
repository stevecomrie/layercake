<h1>Edit Account Settings</h1>

<?php echo $this->Form->create('Admin', array( 'autocomplete' => 'off' ) ); ?>
<?php echo $this->Form->input('id' ); ?>

<div class="form-left">
    <?php echo $this->Form->input('username'); ?>
    <?php echo $this->Form->input('name'); ?>
    <?php echo $this->Form->input('email'); ?>
    
    <?php echo $this->Form->input( 'new_password_1', array( 'type' => 'password', 'label' => 'New Password' ) ); ?>
    <?php echo $this->Form->input( 'new_password_2', array( 'type' => 'password', 'label' => 'Repeat Password' ) ); ?>
</div>
<div class="clear"></div>

<?php echo $this->Form->end( array( 'label' => 'Save' ) );?>
<p class="spacer">or ...</p>
<p class="cancel"><a href="/admin/dashboards">cancel</a></p>


