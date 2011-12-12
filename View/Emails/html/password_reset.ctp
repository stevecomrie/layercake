<p>Below you will find the username & password you recently requested for your administrative account at <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/admin">http://<?php echo $_SERVER['HTTP_HOST']; ?>/admin</a></p>

<p>
    <b>Username:</b> <?php echo$admin['Admin']['username'];?><br />
    <b>Password:</b> <?php echo$admin['Admin']['password'];?>
</p>

<p>If you continue to have problems, please contact your webmaster at: <a href="mailto:<?php echo $from; ?>"><?php echo $from; ?></a></p>