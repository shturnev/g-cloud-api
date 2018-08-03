<?php
header('Content-Type: application/json');
require_once "vendor/autoload.php";
$API = new \classes\Upload();


/*-----------------------------------

-----------------------------------*/

if($_REQUEST['method_name'] == 'upload'){
    try{
//        $arr = ['file' => $_FILES["file"]["tmp_name"], 'filename' => time().rand()];
        $arr = [
            'file'      => $_REQUEST["file"],
            'filename'  => $_REQUEST['filename'],
            'bucket'    => $_REQUEST['bucket'] ?: 'g-cloud-api'
        ];

        if($_FILES["file"]["tmp_name"]){
            $arr['file']     = $_FILES["file"]["tmp_name"];
            $arr['filename'] = $_FILES["file"]["name"];
        }

        $res['response'] = $API->upload($arr);

    }
    catch(Exception $e){
        $res['error'] = $e->getMessage();
    }

    echo json_encode($res); exit;
}
if($_REQUEST['method_name'] == 'getFile'){
    try{
        $arr = [
            'filename'  => $_REQUEST['filename'],
            'bucket'    => $_REQUEST['bucket'] ?: 'g-cloud-api'
        ];

        $res['response'] = $API->getFile($arr);

    }
    catch(Exception $e){
        $res['error'] = $e->getMessage();
    }

    echo json_encode($res); exit;
}
