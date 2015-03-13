<?php
    class RepeatCounter {
        function countRepeats($input_search, $input_sentence) {
            $amount_of_appereances = 0;
            if ($input_search == $input_sentence) {
                $amount_of_appereances += 1;
            }
            return $amount_of_appereances;
        }
    }

?>
