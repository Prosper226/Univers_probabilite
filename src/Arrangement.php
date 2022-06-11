<?php

/**
 * @author Prosper SEDGO
 * @created_at 10/06/2022
 * @last_update 11/06/2022
 * @github https://github.com/Prosper226?tab=repositories
 * @version 1.0.
 */

namespace Univers;
use Exception;

class Arrangement{


    public function __construct(){}


    private function cardinal($n, $k){
        try{
            return $this->Factorial($n) / $this->Factorial($n - $k);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function univers($ensemble = array(), $k = 1){
        try{
            if(in_array($k, [1,2,3,4,5], true)){
                $UNIVERS = "univers_$k".'k';
                return $this->$UNIVERS($ensemble, $k);
            }else{
                throw new Exception("univers margin violation");
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function Factorial($n) {
        try{
            return ($n <= 1) ? 1 : $n * $this->Factorial($n - 1);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    private function univers_3k($ensemble = array(), $k = 3){
        
        $univers    = [];
        $taille     = count($ensemble);
    
        $firstTaille    = $taille;
        $secondTaille   = $firstTaille - 1;
        $thirstTaille   = $secondTaille - 1;
    
        for($i = 0; $i < $firstTaille ; $i++){  // first iteration
            $final = [];
            $first  = $ensemble;
            array_push($final, $first[$i]);
            array_splice($first, $i, 1);
            
            for($j = 0; $j < $secondTaille; $j++){ // second iteration
                $second  = $first;
                array_push($final, $second[$j]);
                array_splice($second, $j, 1);

                for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
                    $thirst  = $second;
                    array_push($final, $thirst[$l]);
                    $univers[] = $final;
                    array_splice($final, 2, 1);

                }
                array_splice($final, 1, 1);
            }
            array_splice($final, 0, 1);
        }
        return $univers;
    }

    private function univers_2k($ensemble = array(), $k = 2){
    
        $univers    = [];
        $taille     = count($ensemble);
    
        $firstTaille    = $taille;
        $secondTaille   = $firstTaille - 1;
        
    
        for($i = 0; $i < $firstTaille ; $i++){  // first iteration
            $final  = [];
            $first  = $ensemble;
            array_push($final, $first[$i]);
            array_splice($first, $i, 1);
            
            for($j = 0; $j < $secondTaille; $j++){ // second iteration
                $second  = $first;
                array_push($final, $second[$j]);
                array_splice($second, $j, 1);

                $univers[] = $final;
                array_splice($final, 1, 1);
            }
            array_splice($final, 0, 1);
        }
        return $univers;
    }

    private function univers_1k($ensemble = array(), $k = 1){
        
        $univers    = [];
        $taille     = count($ensemble);
    
        $firstTaille    = $taille;
        $secondTaille   = $firstTaille - 1;
    
        for($i = 0; $i < $firstTaille ; $i++){  // first iteration
            $final  = [];
            $first  = $ensemble;
            array_push($final, $first[$i]);
            array_splice($first, $i, 1);

            $univers[] = $final;
            array_splice($final, 0, 1);
        }
        return $univers;
    }

    private function univers_4k($ensemble = array(), $k = 4){
    
        $univers    = [];
        $taille     = count($ensemble);
    
        $firstTaille    = $taille;
        $secondTaille   = $firstTaille - 1;
        $thirstTaille   = $secondTaille - 1;
        $fourTaille     = $thirstTaille - 1;
    
        for($i = 0; $i < $firstTaille ; $i++){  // first iteration
            $final = [];
            $first  = $ensemble;
            array_push($final, $first[$i]);
            array_splice($first, $i, 1);
            
            for($j = 0; $j < $secondTaille; $j++){ // second iteration
                $second  = $first;
                array_push($final, $second[$j]);
                array_splice($second, $j, 1);

                for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
                    $thirst  = $second;
                    array_push($final, $thirst[$l]);
                    array_splice($thirst, $l, 1);

                    for($m = 0; $m < $fourTaille; $m++){ // four iteration
                        $four  = $thirst;
                        array_push($final, $four[$m]);

                        $univers[] = $final;
                        array_splice($final, 2, 1);
                    }
                    array_splice($final, 2, 1);

                }
                array_splice($final, 1, 1);
            }
            array_splice($final, 0, 1);
        }
        return $univers;
    }

    private function univers_5k($ensemble = array(), $k = 5){
        
        $univers    = [];
        $taille     = count($ensemble);
    
        $firstTaille    = $taille;
        $secondTaille   = $firstTaille - 1;
        $thirstTaille   = $secondTaille - 1;
        $fourTaille     = $thirstTaille - 1;
        $fiveTaille     = $fourTaille - 1;
    
        for($i = 0; $i < $firstTaille ; $i++){  // first iteration
            $final = [];
            $first  = $ensemble;
            array_push($final, $first[$i]);
            array_splice($first, $i, 1);
            
            for($j = 0; $j < $secondTaille; $j++){ // second iteration
                $second  = $first;
                array_push($final, $second[$j]);
                array_splice($second, $j, 1);

                for($l = 0; $l < $thirstTaille; $l++){ // thirst iteration
                    $thirst  = $second;
                    array_push($final, $thirst[$l]);
                    array_splice($thirst, $l, 1);

                    for($m = 0; $m < $fourTaille; $m++){ // four iteration
                        $four  = $thirst;
                        array_push($final, $four[$m]);
                        array_splice($four, $m, 1);

                        for($n = 0; $n < $fiveTaille; $n++){ // four iteration
                            $five  = $four;
                            array_push($final, $five[$n]);
    
                            $univers[] = $final;
                            array_splice($final, 4, 1);

                        }
                        array_splice($final, 3, 1);
                    }
                    array_splice($final, 2, 1);

                }
                array_splice($final, 1, 1);
            }
            array_splice($final, 0, 1);
        }
        return $univers;
    }

    private function defineEnsemble(int $nbHorse, array $excludedHorse): Array {
        for($i = 1; $i <= $nbHorse; $i++){
            if(in_array($i,$excludedHorse)) continue;
            $ensemble[] = $i;
        }
        return $ensemble;
    }



    public function tickets(Array $jeu): Array {
        try{
            $champs     = $jeu['champs'];
            $ensemble   = $jeu['ensemble'];
            $type       = $jeu['type'];

            $k          = $type - count($champs);
            $univers    = $this->univers($ensemble, $k);
            
            // //////////////////////////////////////
            // $cardinal   = $this->cardinal(count($ensemble), $k);
            // error_log($cardinal);
            // //////////////////////////////////////

            $tickets    = [];
            $know       = [];
            $horses     = [];
            for($i = 0; $i < count($champs); $i++){
                $pos = $champs[$i]['pos'];
                if($pos > $type || $pos < 1){
                    throw new Exception("Cannot resolve position: $pos");
                }else{
                    if(in_array($pos - 1, $know)){
                        throw new Exception("Duplicate key are found: $pos");
                    }else{
                        $horse = $champs[$i]['horse'];
                        if(in_array($horse, $horses)){
                            throw new Exception("Duplicate horse are found: $horse");
                        }
                        $know[]     = $pos - 1;
                        $horses[]   = $horse;
                    }
                }
            }

            for($i = 0; $i < count($univers); $i++){
                $k      = 0;
                $elt    = $univers[$i];
                $ticket = [];
                $l      = 0;
                for($j = 0; $j < $type; $j++){
                    
                    if(in_array($j, $know)){
                        $l = array_search($j, $know);
                        $ticket[$j] = $champs[$l]['horse'];
                        $l++;
                    }else{
                        $ticket[$j] = $elt[$k++];
                    }
                }
                
                $tickets[]  = $ticket;
        
            }

            return $tickets;

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function jeu(String $jeu, int $nbHorse): Array{
        try{
            $table  = explode('-', $jeu);
            $taille = count($table);

            if(!in_array($taille, [3, 4, 5])) throw new Exception("Cannot resolve game");

            $champs   = [];
            $excludedHorse = [];

            for($i = 0; $i < $taille; $i++){
                if(strtoupper($table[$i]) == 'X') continue;
                $horse = intval($table[$i]);
                if($horse < 1 || $horse > $nbHorse) throw new Exception("Invalid horse value: $table[$i]");
                $champs []          = ['horse' => $horse, 'pos' => $i + 1];
                $excludedHorse []   = $horse;
            }

            return [
                'type'     => $taille,
                'champs'   => $champs,
                'ensemble' => $this->defineEnsemble($nbHorse, $excludedHorse)
            ];
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function card(Array $jeu): int{
        try{
            $champs     = $jeu['champs'];
            $ensemble   = $jeu['ensemble'];
            $type       = $jeu['type'];
            $k          = $type - count($champs);
            return $this->cardinal(count($ensemble), $k);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}


?>