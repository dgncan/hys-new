<?php

require_once __DIR__ . '/classes/AppLoad.php';


#TEST
use Hys\Tedarik\Siparis;
$test = new Siparis();
$test->ver();

echo "<hr>";

#TEST 2
use Firma\Ak\Tedarik\Siparis as AkSiparis;
$test2 = new AkSiparis();
$test2->ver();


