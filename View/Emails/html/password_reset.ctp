<p>Below you will find the username & password you recently requested for your administrative account at <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/admin">http://<?= $_SERVER['HTTP_HOST']; ?>/admin</a></p>

<p>
    <b>Username:</b> <?=$admin['Admin']['username'];?><br />
    <b>Password:</b> <?=$admin['Admin']['password'];?>
</p>

<p>If you continue to have problems, please contact your webmaster at: <a href="mailto:<?= $from; ?>"><?= $from; ?></a></p>