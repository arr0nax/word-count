<?php
    class RepeatCounter {
        public $sentence_array;
        public $word;

        function parse_sentence($sentence)
        {
            $this->sentence_array = explode(' ',$sentence);
            return $this->sentence_array;
        }
        function count_words($word1)
        {
            $word1 = strtolower($word1);
            $word_count = 0;
            foreach($this->sentence_array as $word2)
            {
                if ($word1 == strtolower($word2))
                {
                    ++$word_count;
                }
            }
            return $word_count;
        }
        function CountRepeats($sentence,$word)
        {
            $this->word = $word;
            $this->parse_sentence($sentence);
            return $this->count_words($word);
        }

    }


?>
