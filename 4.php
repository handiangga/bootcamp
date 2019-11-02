<?php

$dict = array('cat', 'listen', 'code', 'act', 'silent', 'tac');

if(isset($_POST['anagram'])){
$anagram = $_POST['anagram'];

$anagram = strtolower($anagram);

//split the string
$test = str_split($anagram);

//compare with $dict for the first split without joining
for ($i=0; $i<strlen($anagram); $i++) {
    if ($test[$i]==$dict[$i]) {
        echo $test[$i]."<br />";
    }
}
}

?>