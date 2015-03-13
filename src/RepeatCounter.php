<?php
    class RepeatCounter {

        private $word;
        private $sentence;
        private $amount_of_appearances;


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
        function getAmount() {
            return $this->amount_of_appearances;
        }
        function amountAdd() {
            $this->amount_of_appearances += 1;
        }

        function countRepeats() {

            $sentence_array = explode( " ", $this->getSentence());


            foreach ($sentence_array as $word_in_sentence) {
                if ((ctype_alnum($word_in_sentence)) != 1) {
                    $word_in_sentence = substr_replace($word_in_sentence,"",-1);
                    if ($this->getWord() == $word_in_sentence) {
                        $this->amountAdd();
                    }
                }
                else {
                    if ($this->getWord() == $word_in_sentence) {
                        $this->amountAdd();
                    }
                }
            }
            return $this->getAmount();

        }
    }

?>
