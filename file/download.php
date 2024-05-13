
<?php

getfilename();
function getfilename(){
    $filepath=getcwd();
    $filename=scandir($filepath.'/download/');
    var_dump($filename);
    foreach($filename as $value){
        // $arr[]=$value;
        if($value!='.'&&$value!='..'){
        echo $value.'<br>';

        }
    }
}

?>