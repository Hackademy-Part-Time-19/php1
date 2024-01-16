<?php

$corsoHackademy = [ "nome" => ["Samuele", "emanuele"], 
"telefono" => ["pippo", "franco", "coppola"], 
"cibi" => ["html", "css", "bootstrap", "javascript", "php"],
"orario" => ["mattina"=>[10,11,12], "pomeriggio"=>[14,15,19], "sera"=>[20,21,22]],
];
 
echo $corsoHackademy["orario"]["sera"][1]. " " . $corsoHackademy["telefono"][0]
?>