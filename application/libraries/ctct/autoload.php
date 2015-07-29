<?php
require_once('SplClassLoader.php');

// Load the Ctct namespace
$loader = new \ctct\SplClassLoader('ctct', dirname(__DIR__));
$loader->register();
