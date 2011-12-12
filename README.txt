LayerCake is a skinny, extendable web control panel for CakePHP 2.x web
sites and web applications.


Download:

  https://github.com/stevecomrie/layercake


Install:

  1. Unzip the plugin to your app/Plugin folder with the name LayerCake

  2. Add the plugin to your CakePHP app config by updating your
     app/Config/bootstrap.php file:

     CakePlugin::load( 'LayerCake' => array( 'routes' => true ) );

  3. Add LayerCake/Config/Schema/layercake.sql to your database

  4. Run the console shell to create your admin user:

     $ cd /my/app_folder
     $ Console/cake LayerCake.ResetAdminPassword

  5. Access the LayerCake panel by pointing your web browser at:
  
     http://your.domain.com/admin
   
 
Questions / Comments:

  Please contact: stevecomrie@gmail.com