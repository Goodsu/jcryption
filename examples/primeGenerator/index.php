<?php

require_once("../../jCryption-1.0.1.php");
$keyLength = 128;
$jCryption = new jCryption();

$primeCacheFile = md5($keyLength.$jCryption->getE());
$fp = fopen($primeCacheFile, 'a+') or die("can't open file");

$stringData = '"'.$jCryption->generatePrime($keyLength).'",';
fwrite($fp, $stringData);

fclose($fp);

/*
$foo = array(get_include_contents('256.php'));

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}*/
//echo $jCryption->dec2string($jCryption->generatePrime(256),36);
?>