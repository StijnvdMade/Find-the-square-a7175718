<?php

$combos = array();

$input = file_get_contents("input.txt");

$newinput = explode("\n", $input);

foreach ($newinput as $key => $value) {
    // echo($value . PHP_EOL);
    $letters = str_split($value);
    // var_dump($letters);
    for ($i=0; $i < count($letters)-1; $i++) { 
        if ($letters[$i] == $letters[$i+1]) {
            // echo("2 achter elkaar");
            $combo = array($i, $key, $letters[$i]);
            array_push($combos, $combo);
        }
    }
}
// var_dump($combos);
foreach ($combos as $key => $value) {
    $welkecombo = array($value[0], $value[1]+1, $value[2]);
    if (array_search($welkecombo, $combos) != false) {
        echo("Letter: " . $welkecombo[2] . ", Horizontale locatie: " . $welkecombo[0] . ", Verticale locatie: " . $welkecombo[1] . PHP_EOL);
    }
    
}

echo("Thanks Ties :^)");
?>