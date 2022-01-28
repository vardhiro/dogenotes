<?php
$path = str_replace('/dogenotes', '', $_SERVER["REQUEST_URI"]);
if(empty($path) || $path  == '/'){
    require_once('pages/home.php');
}else{
    $function = explode("/", $path)[1];
    $filename = explode("/", $path)[2];
    if($function == 'delete')
    {
        require_once('pages/delete.php');
    }elseif ($function == 'view') {
        require_once('pages/view.php');
    }elseif ($function == 'edit') {
        require_once('pages/edit.php');
    }elseif ($function == 'add') {
        require_once('pages/add.php');
    }
}
?>