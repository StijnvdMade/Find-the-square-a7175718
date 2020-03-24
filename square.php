<?php
$combos = array();
$input = file_get_contents("input.txt");
$newinput = explode("\n", $input);
foreach ($newinput as $key => $value) {
    $letters = str_split($value);
    for ($i=0; $i < count($letters)-1; $i++) { 
        if ($letters[$i] == $letters[$i+1]) {
            // echo("2 achter elkaar");
            $combo = array($i, $key, $letters[$i]);
            array_push($combos, $combo);
        }
    }
}
foreach ($combos as $key => $value) {
    $welkecombo = array($value[0], $value[1]+1, $value[2]);
    if (array_search($welkecombo, $combos) != false) {
        echo("Letter: " . $welkecombo[2] . ", Horizontale locatie: " . $welkecombo[0] . ", Verticale locatie: " . $welkecombo[1] . PHP_EOL);
    }
}
echo("Thanks Ties :^)");
?>