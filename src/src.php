<?php
    class Count {
        public $sentence_array;

        function parse_sentence($sentence)
        {
            $sentence = strtolower($sentence);
            $this->sentence_array = explode(' ',$sentence);
            return $this->sentence_array;
        }
        function count_words($word1)
        {
            $word1 = strtolower($word1);
            $word_count = 0;
            foreach($this->sentence_array as $word2)
            {
                if ($word1 == $word2)
                {
                    ++$word_count;
                }
            }
            return $word_count;
        }

    }


?>
