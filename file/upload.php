<?php  
// 获取文件的名字  
$name = $_FILES['upload']['name'];  
// 获取文件的类型  
$type = $_FILES['upload']['type'];  
// 获取文件的大小  
$size = $_FILES['upload']['size'];  
// 获取文件的错误代码  
$error = $_FILES['upload']['error'];  
// 获取文件的临时文件名  
$tmpname = $_FILES['upload']['tmp_name'];  
  
echo $name."<br>";  
echo $type."<br>"; // 这里修正了变量名从 $tyq 到 $type  
echo $size."<br>";  
echo $error."<br>";  
echo $tmpname."<br>";  
if(!move_uploaded_file($tmpname,'upload/'.$name)){

    echo "文件上传失败！";
}else
{
    echo "文件上传成功！";
    echo "上传路径为:/upload/".$name;
}

?>


