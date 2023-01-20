<?php

// просмотр вперед

$string = 'LudovicXV, LudovicXVI, LudovicXVIII, LudovicLXVII, LudovicXXL';

preg_match_all('/Ludovic(?=XVI)/', $string, $matches);
//print_r($matches);

$string = 'One Two, Three Two';

preg_match_all('/(?<=One )Two/', $string, $matches);
//print_r($matches);


