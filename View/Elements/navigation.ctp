<?php
    // try to read the navigation
    $navigation = Cache::read( 'LayerCake.admin_navigation' );

    
    // if it doesn't exist, re-create it
    if( empty( $navigation ) ) {
        // import models and helpers we need
        App::import( 'Model', 'LayerCake.AdminModule' );
        App::Import( 'Helper', 'LayerCake.MenuTree' );
        
        // load admin modules
        $AdminModules = new AdminModule();
        $modules = $AdminModules->active_modules();
    
        // load navigation
        $this->MenuTree = new MenuTreeHelper();
        $navigation = $this->MenuTree->generate( $modules, array( 'id' => 'nav', 'element' => 'dropdown_menu' ) );
        
        // cache our results
        Cache::write( 'LayerCake.admin_modules',    $modules );
        Cache::write( 'LayerCake.admin_navigation', $navigation );
    }
?>

<!-- Dropdown Menu -->
<?php echo $navigation; ?>

<!-- User Menu -->
<ul id="user">
    <li><a href="/admin/admins/update/">Edit Account</a></li>
    <li><a>|</a></li>
    <!--<li><a href="/admin/settings">Settings</a></li>-->
    <li><a href="/admin/admins/logout">Logout</a></li>
</ul>