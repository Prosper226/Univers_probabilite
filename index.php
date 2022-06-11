<?php
require 'Arrangement.php';

try{
    
    $Arrangement    =   new Arrangement();

    $jeu        =   "3-2-x-5-9";
    $nbHorse    =   16;
    $jeu        =   $Arrangement->jeu($jeu, $nbHorse);

    $champs     =   $jeu['champs'];
    $ensemble   =   $jeu['ensemble'];
    $type       =   $jeu['type'];

    $tikets     =   $Arrangement->tikets($champs, $ensemble, $type);

    // error_log(print_r(["jeu" => $jeu], true));
    error_log(print_r(["Tickets" => $tikets], true));


    // $jeux = [
    //     "jeu"       =>  "7-12-4-11",
    //     "price"     =>  200,
    //     "fees"      =>  50,
    //     "strikes"   =>  "1"
    // ];

    // $resultat = json_decode('{"result":"4-12-9-13","order":"478500","desorder":"39500","win2":"11000","win2A":"3500","win2B":"7000","win2C":"12500","npt":["8"],"svn":"-","cvn":"-","tvn":"19500","qvn":"-","bonus":"-","map":"181494500","mapc":"68017000","mapg":"249511500"}');
    // error_log(print_r(["Result" => $resultat], true));




}catch(Exception $e){
    error_log($e->getMessage());
}

?>