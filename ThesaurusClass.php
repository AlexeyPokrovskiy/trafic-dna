<?php
    class Thesaurus {
        private $thesaurus;

        function Thesaurus($thesaurus){
            $this->thesaurus = $thesaurus;
        }

        public function getSynonyms($word){
            $result = array(
                "word" => $word,
                "synonyms" => array()
            );

            if(isset( $this->thesaurus[$word])){
                $result["synonyms"] = json_encode($this->thesaurus[$word]);
            }

            return json_encode($result);
        }
    }
    $thesaurus = new Thesaurus(
        array(
            "buy" => array("purchase"),
            "big" => array("great", "large")
        ));

    echo $thesaurus->getSynonyms("big");
    echo "\n"; echo
    $thesaurus->getSynonyms("agelast");