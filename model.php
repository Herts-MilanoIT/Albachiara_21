







    <?php

    class linkPaginaModello{
      public static function collegamentiPaginaModel($linkModel){

        if($linkModel == 'home' ||  $linkModel == 'who-we-are'  || $linkModel == 'products' || $linkModel == 'services' || $linkModel == 'contacts'
           /*$linkModel == 'who-we-are' ||
           $linkModel == 'products'   ||
           $linkModel == 'services'   ||
         $linkModel == 'contacts'   */

       ){

             $moduloNav = 'Views/Modules/' . $linkModel . '.php';

        }

        else if($linkModel == 'index'){
          $moduloNav = 'Views/Modules/home.php';
        }else{
          $moduloNav = 'Views/Modules/home.php';
        }

        return  $moduloNav;



      }
    }
