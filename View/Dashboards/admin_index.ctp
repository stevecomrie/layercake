<?php
    $this->set( 'title_for_layout', "Admin Dashboard" );
    
    // clear the cache each time we come back to the dashboard home page
    Cache::clear();
    
    // import models and helpers we need
    App::import( 'Model', 'LayerCake.AdminModule' );
    
    // load admin modules   
    $AdminModules = new AdminModule();
    $modules      = $AdminModules->active_modules();
    
    // load navigation
    $navigation     = $this->MenuTree->generate( $modules, array( 'id' => 'nav', 'element' => 'dropdown_menu' ) );
    
    // cache our results
    Cache::write( 'LayerCake.admin_modules',    $modules );
    Cache::write( 'LayerCake.admin_navigation', $navigation );
?>

<h1>Dashboard</h1>

<ul id="dashboard" class="box">
    <?php $modules = Cache::read( 'LayerCake.admin_modules' );
        foreach ( $modules AS $module ): ?>
            <li onclick="location.href=('<?php echo$module['AdminModule']['link'];?>')"><p><img src="/layer_cake/images/<?php echo$module['AdminModule']['icon'];?>" alt="" /></p><h2><a href="<?php echo$module['AdminModule']['link'];?>"><?php echo$module['AdminModule']['name'];?></a></h2></li>
            
            <?php foreach ( $module['children'] AS $child ): ?>
                <li onclick="location.href=('<?php echo$child['AdminModule']['link'];?>')"><p><img src="/layer_cake/images/<?php echo$child['AdminModule']['icon'];?>" alt="" /></p><h2><a href="<?php echo$child['AdminModule']['link'];?>"><?php echo$child['AdminModule']['name'];?></a></h2></li>
            <?php endforeach; ?>
    <?php  endforeach; ?>
</ul>