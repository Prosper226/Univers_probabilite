<?php
require 'Arrangement.php';


try{
    

    $Arrangement = new Arrangement();

    $ensemble = [2,3,4,5,6];

    // $n = count($ensemble);
    // $k = 2;

    // $card = $Arrangement->cardinal($n, $k);
    // $univ = $Arrangement->univers($ensemble, $k);

    $champs = [
        // ['horse' => 11, 'pos' => 1],
        // ['horse' => 1, 'pos' => 2], 
        // ['horse' => 7, 'pos' => 4], 
        ['horse' => 9, 'pos' => 5],
        ['horse' => 11, 'pos' => 1],
        // ['horse' => 7, 'pos' => 4], 
        
    ];

    $type = 5;
    $tikets = $Arrangement->tikets($champs, $ensemble, $type);

    // // error_log("Cardinal : ".$card);
    // error_log(print_r(["Univers" => $univ], true));
    error_log(print_r(["Tickets" => $tikets], true));



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