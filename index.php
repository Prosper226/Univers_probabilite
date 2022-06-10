<?php
require 'Arrangement.php';


try{
    
    $Arrangement = new Arrangement();
    $ensemble = [2,3,4,5,6,7, 8, 9,10, 11, 12, 13, 14, 15, 16];

    $champs = [
        ['horse' => 1, 'pos' => 1],
        // ['horse' => 2, 'pos' => 2], 
        // ['horse' => 3, 'pos' => 4], 
        // ['horse' => 9, 'pos' => 5],
        // ['horse' => 11, 'pos' => 4],
        // ['horse' => 7, 'pos' => 4], 
    ];

    $type = 3;

    $tikets = $Arrangement->tikets($champs, $ensemble, $type);

    // // error_log("Cardinal : ".$card);
    // error_log(print_r(["Univers" => $univ], true));
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









































// class Arrangement{

//     public function cardinal($n, $k){
//         return $this->Factorial($n) / $this->Factorial($n - $k);
//     }


//     private function Factorial($n) {
//         return ($n <= 1) ? 1 : $n * $this->Factorial($n - 1);
//     }


//     public function univers_($ensemble = array(), $k = 3){
//         // On considere ici que nous somme face a un tierce
//         $univers    = [];
//         $taille     = count($ensemble);
    
//         $firstTaille    = $taille;
//         $secondTaille   = $firstTaille - 1;
//         $thirstTaille   = $secondTaille - 1;
    
//         for($i = 0; $i < $firstTaille ; $i++){  // first iteration
//             $final = [];
//             $first  = $ensemble;
//             array_push($final, $first[$i]);
//             array_splice($first, $i, 1);
            
//             for($j = 0; $j < $secondTaille; $j++){ // second iteration
//                 $second  = $first;
//                 array_push($final, $second[$j]);
//                 array_splice($second, $j, 1);

//                 for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
//                     $thirst  = $second;
//                     array_push($final, $thirst[$l]);
//                     $univers[] = $final;
//                     array_splice($final, 2, 1);

//                 }
//                 array_splice($final, 1, 1);
//             }
//             array_splice($final, 0, 1);
//         }
//         return $univers;
//     }


//     public function univers__($ensemble = array(), $k = 2){
//         // On considere ici que nous somme face a un couple
//         $univers    = [];
//         $taille     = count($ensemble);
    
//         $firstTaille    = $taille;
//         $secondTaille   = $firstTaille - 1;
//         // $thirstTaille   = $secondTaille - 1;
    
//         for($i = 0; $i < $firstTaille ; $i++){  // first iteration
//             $final  = [];
//             $first  = $ensemble;
//             array_push($final, $first[$i]);
//             array_splice($first, $i, 1);
            
//             for($j = 0; $j < $secondTaille; $j++){ // second iteration
//                 $second  = $first;
//                 array_push($final, $second[$j]);
//                 array_splice($second, $j, 1);

//                 // for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
//                 //     $thirst  = $second;
//                 //     array_push($final, $thirst[$l]);
//                     // $univers[] = $final;
//                     // array_splice($final, 2, 1);

//                 // }
//                 $univers[] = $final;
//                 array_splice($final, 1, 1);
//             }
//             array_splice($final, 0, 1);
//         }
//         return $univers;
//     }


//     public function univers___($ensemble = array(), $k = 1){
//         // On considere ici que nous somme face a un couple
//         $univers    = [];
//         $taille     = count($ensemble);
    
//         $firstTaille    = $taille;
//         $secondTaille   = $firstTaille - 1;
//         // $thirstTaille   = $secondTaille - 1;
    
//         for($i = 0; $i < $firstTaille ; $i++){  // first iteration
//             $final  = [];
//             $first  = $ensemble;
//             array_push($final, $first[$i]);
//             array_splice($first, $i, 1);
            
//             // for($j = 0; $j < $secondTaille; $j++){ // second iteration
//             //     $second  = $first;
//             //     array_push($final, $second[$j]);
//             //     array_splice($second, $j, 1);

//             //     // for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
//             //     //     $thirst  = $second;
//             //     //     array_push($final, $thirst[$l]);
//             //         // $univers[] = $final;
//             //         // array_splice($final, 2, 1);

//             //     // }
//             //     $univers[] = $final;
//             //     array_splice($final, 1, 1);
//             // }
//             $univers[] = $final;
//             array_splice($final, 0, 1);
//         }
//         return $univers;
//     }


//     public function univers____($ensemble = array(), $k = 4){
//         // On considere ici que nous somme face a un tierce
//         $univers    = [];
//         $taille     = count($ensemble);
    
//         $firstTaille    = $taille;
//         $secondTaille   = $firstTaille - 1;
//         $thirstTaille   = $secondTaille - 1;
//         $fourTaille     = $thirstTaille - 1;
    
//         for($i = 0; $i < $firstTaille ; $i++){  // first iteration
//             $final = [];
//             $first  = $ensemble;
//             array_push($final, $first[$i]);
//             array_splice($first, $i, 1);
            
//             for($j = 0; $j < $secondTaille; $j++){ // second iteration
//                 $second  = $first;
//                 array_push($final, $second[$j]);
//                 array_splice($second, $j, 1);

//                 for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
//                     $thirst  = $second;
//                     array_push($final, $thirst[$l]);
//                     array_splice($thirst, $l, 1);

//                     for($m = 0; $m < $fourTaille; $m++){ // four iteration
//                         $four  = $thirst;
//                         array_push($final, $four[$m]);

//                         $univers[] = $final;
//                         array_splice($final, 2, 1);
//                     }
//                     array_splice($final, 2, 1);

//                 }
//                 array_splice($final, 1, 1);
//             }
//             array_splice($final, 0, 1);
//         }
//         return $univers;
//     }

//     public function univers($ensemble = array(), $k = 5){
//         // On considere ici que nous somme face a un tierce
//         $univers    = [];
//         $taille     = count($ensemble);
    
//         $firstTaille    = $taille;
//         $secondTaille   = $firstTaille - 1;
//         $thirstTaille   = $secondTaille - 1;
//         $fourTaille     = $thirstTaille - 1;
//         $fiveTaille     = $fourTaille - 1;
    
//         for($i = 0; $i < $firstTaille ; $i++){  // first iteration
//             $final = [];
//             $first  = $ensemble;
//             array_push($final, $first[$i]);
//             array_splice($first, $i, 1);
            
//             for($j = 0; $j < $secondTaille; $j++){ // second iteration
//                 $second  = $first;
//                 array_push($final, $second[$j]);
//                 array_splice($second, $j, 1);

//                 for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
//                     $thirst  = $second;
//                     array_push($final, $thirst[$l]);
//                     array_splice($thirst, $l, 1);

//                     for($m = 0; $m < $fourTaille; $m++){ // four iteration
//                         $four  = $thirst;
//                         array_push($final, $four[$m]);
//                         array_splice($four, $m, 1);

//                         for($n = 0; $n < $fiveTaille; $n++){ // four iteration
//                             $five  = $four;
//                             array_push($final, $five[$n]);
    
//                             $univers[] = $final;
//                             array_splice($final, 4, 1);

//                         }
//                         array_splice($final, 3, 1);
//                     }
//                     array_splice($final, 2, 1);

//                 }
//                 array_splice($final, 1, 1);
//             }
//             array_splice($final, 0, 1);
//         }
//         return $univers;
//     }






// }



// $Arrangement = new Arrangement();
// $n = 5;
// $k = 5;
// $card = $Arrangement->cardinal($n, $k);
// $ensemble = [1,2,3,4,5];

// $univ = $Arrangement->univers($ensemble, 3);

// error_log("Cardinal : ".$card);
// error_log(print_r(["Univers" => $univ], true));


// $np = new np();
// $x = $np::arange(1, 5);

// echo $x;

?>