<?php


$result;



$words1 = [ 'una',  67,  'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo',[  'cammin', 'Nel',  [  'selva', 'la',  [ 'via',  'una',  true,  ]  ],  ]  ],'ritrovai', 'per' ],  'diritta'];



$words2 = [ 
  'elemento1' => 25.89, 
  'elemento2' => 'nostra', 
  'elemento3' => [ 
                    'Virgilio', 
                    'smarrita', 
                    'ché' 
                  ] 
];

$di= "di";

$result = $words1[6][3][1][1]. " " . $words1[6][3][0] . " ". "di ".$words1[6][3][1][0]." ". $di ." ".$words2['elemento2'] . " " . $words1[2]. " ". $words1[4]. " " . $words1[6][4]. " " . $words1[6][5]. " " . $words1[0]. " " . $words1[6][3][1][2][0]. " " . $words1[6][0]. " " . $words2['elemento3'][2];


echo $result;
?>