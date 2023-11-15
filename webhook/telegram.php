<?php
$body = file_get_contents('php://input');
$arBody = json_decode($body, 1);

if(!is_dir($_SERVER['DOCUMENT_ROOT'].'/logs1/'))
    mkdir($_SERVER['DOCUMENT_ROOT'].'/logs1/');

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs1/'.date('Y-m-d').'.log', print_r([1, $arBody], 1), FILE_APPEND);
