<?php

include_once libs('/Forms/Form.php');
include_once libs('/Forms/Formfield.php');
include_once libs('/Forms/Formprint.php');
include_once libs('/Forms/HttpFile.php');
$forms = glob(app_path('/forms/*.php'));
foreach($forms as $form){
    if(is_file($form)){
        include_once $form;
    }
}