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

        function getArray() {
            return $this->exploded_array;
        }

        function countRepeats() {
            $amount_of_appereances = 0;
            $sentence_array = explode( " ", $this->sentence);

            foreach ($sentence_array as $word_in_sentence) {
                if ($this->word == $word_in_sentence) {
                    $amount_of_appereances += 1;
                }
            }
            return $amount_of_appereances;
        }

        function marks() {
            $sentence_array = explode( " ", $this->sentence);

            foreach ($sentence_array as $word_in_sentence) {
                if ($this->word == $word_in_sentence) {
                    array_push($this->mark_array, ("<mark>".$word_in_sentence."</mark>"));
                }
                array_push($this->mark_array, $word_in_sentence);
            }
            return $mark_array;
        }
    }

?>
