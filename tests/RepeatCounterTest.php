<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_repeatCounter_oneLetterOneMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = 'a';
            $input_sentence = 'a';

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 1);
        }

        function test_repeatCounter_twoOneLetterOneMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = 'a';
            $input_sentence = 'a b';

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 1);
        }

        function test_repeatCounter_twoLetterOneMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = 'it';
            $input_sentence = 'it';

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 1);
        }

        function test_repeatCounter_twoWordTwoLetterOneMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = 'md';
            $input_sentence = 'md ok';

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 1);
        }

        function test_repeatCounter_twoWordsOneMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = "apple";
            $input_sentence = "apple appl";

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 1);
        }

        function test_repeatCounter_twoWordsTwoMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = "orange";
            $input_sentence = "orange orange";

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 2);
        }

        function test_repeatCounter_stringNoMatch() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = "bacon";
            $input_sentence = "chicken wings turkey barbacue";

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 0);
        }

        function test_repeatCounter_realWorld() {
            $test_repeatCounter = new RepeatCounter;
            $input_search = "you";
            $input_sentence = "Hey hey you you I don't like your girl friend. I think you should get a new one";

            $result = $test_repeatCounter->countRepeats($input_search, $input_sentence);

            $this->assertEquals($result, 3);
        }
    }
?>
