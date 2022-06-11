<?php

use Univers\Arrangement;
require(__DIR__.'/vendor/autoload.php');

try{
    
    $Arrangement    =   new Arrangement();

    $jeu        =   "x-X-x-X";
    $nbHorse    =   16;
    $jeu        =   $Arrangement->jeu($jeu, $nbHorse);
    $tickets    =   $Arrangement->tickets($jeu);
    $cardinal   =   $Arrangement->card($jeu);

    error_log(print_r(["Jeu"        => $jeu], true));
    // error_log(print_r(["Tickets"    => $tickets], true));
    error_log(print_r(["Cardinal"   => $cardinal], true));


}catch(Exception $e){
    error_log($e->getMessage());
}

?>