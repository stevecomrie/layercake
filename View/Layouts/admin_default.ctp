<?php header('Content-type: text/html; charset=UTF-8') ;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <?php
        echo $this->Html->charset();
        echo $this->Html->tag( "title", $title_for_layout . " | LayerCake Admin Panel" );
        
        echo $this->Html->css( '/layer_cake/css/reset' );
        echo $this->Html->css( '/layer_cake/css/main' );
        echo $this->Html->css( '/layer_cake/skin/main' );
        echo $this->Html->css( '/layer_cake/css/custom' );
        
        echo $this->Html->script( '/layer_cake/js/jquery' );
        echo $this->Html->script( '/layer_cake/js/jquery.dropdown' );
        
        echo $scripts_for_layout;
    ?>
    
    <!--[if lte IE 7]><link rel="stylesheet" media="screen,projection" type="text/css" href="/layer_cake/css/main-ie.css" /><![endif]-->    

    <meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="Pragma" content="no-cache" />
</head>

<body>
    <div id="main">    
        <!-- Header -->
        <div id="header">
            <div class="box">
                <p id="logo"><a href="/admin/dashboards" title="Dashboard / Home"><img src="/layer_cake/skin/logo.png" alt="LayerCake Administrative Panel" /></a></p>
                <hr class="noscreen" />
                <?php echo $this->element( "navigation", array( "active" => "home", "plugin" => "admin" )); ?>
            </div>
        </div>
    
        <hr class="noscreen" />
    
        <!-- Content -->
        <div id="content" class="box">
            <!-- Status Message -->
            <?php echo $this->Session->flash(); ?>
        
            <div class="box">
                <!-- Search Box -->
                <?php echo $this->element( "search_form", array( "plugin" => "admin" ) ); ?>
                       
                <!-- Content -->
                <?php echo $content_for_layout; ?>
            </div>
        </div>
    
        <hr class="noscreen" />

        <!-- Footer -->
        <div id="footer">
            <div class="box">
                <p class="f-right"></p>
                <p class="f-left" style="font-size:11px;">
                    <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/" target="_blank"><img alt="Creative Commons License" style="border-width:0; float:left;" src="http://i.creativecommons.org/l/by-sa/2.5/ca/80x15.png"></a>&nbsp;&nbsp;This software is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/" target="_blank">Creative Commons Attribution-ShareAlike 2.5 Canada License</a>.
                </p>
            </div>
        </div>
    </div>
</body>
</html>