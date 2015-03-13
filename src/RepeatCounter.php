<?php
    class RepeatCounter {

        private $word;
        private $sentence;


        function __construct($input_word, $input_sentence) {
            $this->word = $input_word;
            $this->sentence = $input_sentence;
        }

        function getWord() {
            return $this->word;
        }

        function getSentence() {
            return $this->sentence;
        }


        function countRepeats() {
            $amount_of_appereances = 0;
            $sentence_array = explode( " ", $this->sentence);
            $array1 = array();

            foreach ($sentence_array as $word_in_sentence) {
                if ((ctype_alnum($word_in_sentence)) != 1) {
                    $word_in_sentence = substr_replace($word_in_sentence,"",-1);
                    array_push($array1, $word_in_sentence);
                }
                else {
                    array_push($array1, $word_in_sentence);
                }
            }

            foreach ($array1 as $word_in_sentence) {
                if ($this->word == $word_in_sentence) {
                    $amount_of_appereances += 1;
                }
            }
            return $amount_of_appereances;
        }

    }

?>
