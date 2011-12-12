<?php header('Content-type: text/html; charset=UTF-8') ;?>
<?php echo $this->Html->docType( 'xhtml-trans'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?
        echo $this->Html->charset();
        echo $this->Html->tag( "title", $title_for_layout . " | LayerCake Admin Panel" );
        
        echo $this->Html->css( '/layer_cake/css/reset' );
        echo $this->Html->css( '/layer_cake/css/main' );
        echo $this->Html->css( '/layer_cake/skin/main' );
        echo $this->Html->css( '/layer_cake/css/custom' );
        echo $scripts_for_layout;
    ?>
    
    <!--[if lte IE 7]><link rel="stylesheet" media="screen,projection" type="text/css" href="/layer_cake/css/main-ie.css" /><![endif]-->    

    <meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="Pragma" content="no-cache" />
</head>

<body id="sign">
    <div id="main">
        <!-- Header -->
        <div id="header">
            <p id="logo"><img src="/layer_cake/skin/logo.png" alt="LayerCake Administrative Panel" /></p>
        </div>
    
        <hr class="noscreen" />
    
        <!-- Content -->
        <div id="content">
            <!-- Status Message -->
            <?= $this->Session->flash(); ?>
            <?= $this->Session->flash( 'auth' ); ?>
            
            <!-- Content -->
            <?= $content_for_layout; ?>
        </div>
    </div>
</body>

</html>