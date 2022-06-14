<?php

use Univers\Arrangement;
require(__DIR__.'/vendor/autoload.php');

try{
    
    $Arrangement    =   new Arrangement();

    // /** GRAND CARNET */
    // $jeu        =   "1-6-3-5-4";
    // $nbHorse    =   16;
    // $jeu        =   $Arrangement->jeu($jeu, $nbHorse, 3);
    // $tickets    =   $Arrangement->tickets($jeu);
    // $cardinal   =   $Arrangement->card($jeu);

    // error_log(print_r(["Jeu"        => $jeu], true));
    // error_log(print_r(["Tickets"    => $tickets], true));
    // error_log(print_r(["Cardinal"   => $cardinal], true));



    // /** CHAMP REDUIT */
    // $jeu        =   "1-6-x-x/4-5-8-9";
    // $nbHorse    =   16;
    // $jeu        =   $Arrangement->jeu($jeu, $nbHorse);
    // $tickets    =   $Arrangement->tickets($jeu);
    // $cardinal   =   $Arrangement->card($jeu);

    // error_log(print_r(["Jeu"        => $jeu], true));
    // error_log(print_r(["Tickets"    => $tickets], true));
    // error_log(print_r(["Cardinal"   => $cardinal], true));


    // /** CHAMP TOTAL */
    // $jeu        =   "1-6-2-x";
    // $nbHorse    =   16;
    // $jeu        =   $Arrangement->jeu($jeu, $nbHorse);
    // $tickets    =   $Arrangement->tickets($jeu);
    // $cardinal   =   $Arrangement->card($jeu);

    // error_log(print_r(["Jeu"        => $jeu], true));
    // error_log(print_r(["Tickets"    => $tickets], true));
    // error_log(print_r(["Cardinal"   => $cardinal], true));


}catch(Exception $e){
    error_log($e->getMessage());
}

?>