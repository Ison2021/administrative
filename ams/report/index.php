<?php
require_once("../koolreport-core-7cf23aa/autoload.php");

require_once("sreport.php");

$rport = new sreport;

$rport->run() ->render();

?>