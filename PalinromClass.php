<?php
    class Palindrome {
        public static function isPalindrome($word)     {
           $revert_word = strtolower(strrev($word));

           if(strtolower($word) === $revert_word){
              return true;
           } else {
              return false;
           }
        }
    }

    var_dump(Palindrome::isPalindrome('Deleveled'));