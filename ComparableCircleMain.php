<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne',8);
$circleTwo = new ComparableCircle('circle',2);

var_dump($circleOne->compareTo($circleTwo));