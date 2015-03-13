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
    }
?>
