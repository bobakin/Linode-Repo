<?php

file_put_contents('content.php', $_REQUEST['html']);
file_put_contents('public.css', $_REQUEST['css']);
file_put_contents('editor.css', $_REQUEST['editorCss']);
/*
switch ($_REQUEST['action']) {
    case 'write':
		echo $_REQUEST['blocks'];
        file_put_contents('blocks-save.json', json_encode($_REQUEST['blocks']));
        break;
    case 'read':
		header('Content-Type: application/json;charset=utf-8');
        $s = file_get_contents('blocks-save.json');
        echo $s;
        break;
}*/