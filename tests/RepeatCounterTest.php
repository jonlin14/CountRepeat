<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_repeatCounter_oneLetterOneMatch() {
            $input_search = "a";
            $input_sentence = "a";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(1, $result);
        }

        function test_repeatCounter_twoOneLetterOneMatch() {
            $input_search = "a";
            $input_sentence = "a b";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(1, $result);
        }

        function test_repeatCounter_twoLetterOneMatch() {
            $input_search = "it";
            $input_sentence = "it";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(1, $result);
        }

        function test_repeatCounter_twoWordTwoLetterOneMatch() {
            $input_search = "md";
            $input_sentence = "md ok";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(1, $result);
        }

        function test_repeatCounter_twoWordsOneMatch() {
            $input_search = "apple";
            $input_sentence = "apple appl";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(1, $result);
        }

        function test_repeatCounter_twoWordsTwoMatch() {
            $input_search = "orange";
            $input_sentence = "orange orange";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(2, $result );
        }

        function test_repeatCounter_stringNoMatch() {
            $input_search = "bacon";
            $input_sentence = "chicken wings turkey barbacue";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(0, $result);
        }

        function test_repeatCounter_realWorld() {
            $input_search = "you";
            $input_sentence = "Hey hey you you I don't like your girl friend. I think you should get a new one";
            $test_repeatCounter = new RepeatCounter($input_search, $input_sentence);

            $result = $test_repeatCounter->countRepeats();

            $this->assertEquals(3, $result );
        }


    }
?>
