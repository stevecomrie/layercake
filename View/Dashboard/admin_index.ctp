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
    <? $modules = Cache::read( 'LayerCake.admin_modules' );
        foreach ( $modules AS $module ): ?>
            <li onclick="location.href=('<?=$module['AdminModule']['link'];?>')"><p><img src="/layer_cake/images/<?=$module['AdminModule']['icon'];?>" alt="" /></p><h2><a href="<?=$module['AdminModule']['link'];?>"><?=$module['AdminModule']['name'];?></a></h2></li>
            
            <? foreach ( $module['children'] AS $child ): ?>
                <li onclick="location.href=('<?=$child['AdminModule']['link'];?>')"><p><img src="/layer_cake/images/<?=$child['AdminModule']['icon'];?>" alt="" /></p><h2><a href="<?=$child['AdminModule']['link'];?>"><?=$child['AdminModule']['name'];?></a></h2></li>
            <? endforeach; ?>
    <?  endforeach; ?>
</ul>