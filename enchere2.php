<?php 
    require('include/dbconfig.php');
	$bidid = $_GET["id"];
	$bdd = new Fscf();
	$bdd->bidseeproposal($bidid);
?>

    