<?php
switch ($_REQUEST['action']) {
    case 'write':
        file_put_contents('page-save.json', json_encode($_REQUEST['settings']));
		// file_put_contents('page.css', $_REQUEST['css']); ADDED TO content.css INSTEAD
        break;
    case 'read':
		header('Content-Type: application/json;charset=utf-8');
		$m = file_get_contents('mother.json');
        $s = file_get_contents('page-save.json');
		?>
		{"mother": <?php echo $m;?>,		
		"page": <?php echo $s;?>}
		<?php
        break;
}
