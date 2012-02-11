<?php

switch ($_REQUEST['action']) {
    case 'write':
        file_put_contents('blocks-save.json', json_encode($_REQUEST['blocks']));
        break;
    case 'read':
		header('Content-Type: application/json;charset=utf-8');
        $s = file_get_contents('blocks-save.json');
        echo $s;
        break;
}	
/*
switch ($_REQUEST['action']) {
    case 'write':
		echo serialize($_REQUEST['blocks']);
        file_put_contents('blocks-save.json', serialize($_REQUEST['blocks']));
        break;
    case 'read':
		header('Content-Type: application/json;charset=utf-8');
        $data = unserialize(file_get_contents('blocks-save.json'));
        echo json_encode($data);
        break;
}*/

