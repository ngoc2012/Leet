<?php
    $word1 = "ab";
    $word2 = "pqrs";
    function mergeAlternately($word1, $word2) {
        $output = "";
        $i = 0;
        $len = max(strlen($word1), strlen($word2));
        while ($i < $len) {
            if ($i < strlen($word1)) {
                $output .= $word1[$i];
            }
            if ($i < strlen($word2)) {
                $output .= $word2[$i];
            }
            $i++;
        }
        return $output;
    }
    echo mergeAlternately($word1, $word2);
?>