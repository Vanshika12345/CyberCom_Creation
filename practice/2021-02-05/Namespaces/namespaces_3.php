<?php

namespace one;
include 'namespaces_1.php';
include 'namespaces_2.php';

$obj = new A;

echo '<br>';
$obj = new \two\A;
?>