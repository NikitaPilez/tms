<?php

$cities = ['minsk', 'london', 'paris', 'moscow'];

$result = array_map('ucfirst', $cities);

print_r($result);
