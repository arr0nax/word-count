<?php
    require_once 'src/src.php';

    class SourceTest extends PHPUnit_Framework_TestCase
    {
        function test_parse_function() {
            $input = 'the quick brown brown fox';
            $test_count = new RepeatCounter;

            $result = $test_count->parse_sentence($input);

            $this->assertEquals(['0'=>'the','1'=>'quick','2'=>'brown','3'=>'brown','4'=>'fox'], $result);
        }

        function test_count_function() {
            $input_sentence = 'the quick brown brown fox';
            $input_word = 'brown';
            $test_count = new RepeatCounter;

            $result = $test_count->CountRepeats($input_sentence,$input_word);

            $this->assertEquals(2, $result);
        }

        function test_count_lowercase_function() {
            $input_sentence = 'the quick brOwn Brown fox';
            $input_word = 'broWn';
            $test_count = new RepeatCounter;

            $result = $test_count->CountRepeats($input_sentence,$input_word);

            $this->assertEquals(2, $result);
        }
    }



?>
