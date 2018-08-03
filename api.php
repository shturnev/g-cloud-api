<?php
header('Content-Type: application/json');
require_once "vendor/autoload.php";



/*-----------------------------------

-----------------------------------*/

if($_REQUEST['method_name'] == 'auth'){
    try{
        $res['response'] = $API->Auth($_REQUEST);

    }
    catch(Exception $e){
        $res['error'] = $e->getMessage();
    }

    echo json_encode($res); exit;
}
