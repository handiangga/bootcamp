<?php
$str = 'purwakarta';
print_r(toVowel($str));
echo '
';
echo count(toVowel($str));

function toVowel($str) 
{ 
    $result = []; 
    for ($i = 0; $i < strlen($str); $i++) 
        if (isVowel($str[$i])) {
            $result[] = $str[$i];
        }
    return $result; 
}

function isVowel($str) 
{ 
    $str = strtoupper($str); 
    return $str =='A';
} 
?>