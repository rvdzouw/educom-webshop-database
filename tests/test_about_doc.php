<?php
include_once '../views/about_doc.php';

$data = array('page' => 'about');

$view = new AboutDoc($data);
$view -> show();