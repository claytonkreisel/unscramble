<?php

    //Take scrambled into and output a single unscrambled word
    function unscramble($input){
        $output = '';

        //Collect an array of English words
        $words = json_decode(file_get_contents('https://raw.githubusercontent.com/dwyl/english-words/master/words_dictionary.json'), true);

        //Split our input into letters and sort alphaabetically
        $input_array = str_split($input);
        sort($input_array);

        //Loop through the array of words and split each word alphaabetically
        foreach($words as $word => $number){
            $word_array = str_split($word);
            sort($word_array);

            if($input_array === $word_array){
                $output = $word;
                break;
            }
        }

        return $output;
    }

?>
