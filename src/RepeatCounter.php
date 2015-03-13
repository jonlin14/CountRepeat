<?php
    class RepeatCounter {
        function countRepeats($input_search, $input_sentence) {
            $amount_of_appereances = 0;
            $sentence_array = explode( " ", $input_sentence);

            foreach ($sentence_array as $word_in_sentence) {
                if ($input_search == $word_in_sentence) {
                    $amount_of_appereances += 1;
                }
            }
            return $amount_of_appereances;
        }
    }

?>
