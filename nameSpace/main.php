<?php
namespace School;

include "students.php";
include "result.php";

$galib = new Student("Galib", 12);
$sadia = new Student("Sadia", 72);
$galibResult = new \School\Results\Result($galib);
$sadiaResult = new \School\Results\Result($sadia);
$galibResult->getResult();
$sadiaResult->getResult();
