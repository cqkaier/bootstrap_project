<?php
// echo include("./index.html");
// phpinfo();
// $conn=mysqli_connect('192.168.123.56:3306','root','root');
// mysql_select_db("test1",$conn);
// $sql='select * from news;';
// $result=mysql_query($sql,$conn);
// while($row=mysql_fetch_array($result)){
//     echo $row['id'];
//     echo $row['name'];
//     echo $row['text'];
// }

include("./config/config.php");
$i=$_GET['id'];
// $servername = '192.168.123.56:3306';  
// $username = 'root';  
// $password = 'root';  
// $dbname = 'test1';  
  
// 创建连接  
// $conn = mysqli_connect($servername, $username, $password, $dbname);  
  
// 检测连接  
// if (!$conn) {  
//     die("连接失败: " . mysqli_connect_error());  
// }  
  
// 准备 SQL 查询  
$sql = "SELECT * FROM adminuser where id=$i";  
  
// 执行 SQL 查询  
$result = mysqli_query($conn, $sql);  
  
// 检查结果集  
// if (mysqli_num_rows($result) > 0) {  
    // 输出数据  
    while($row = mysqli_fetch_assoc($result)) {  
        echo "<h1>ID: " . $row["id"]. " - Name: " . $row["username"]. " - Text: " . $row["password"]. "<br></h1>";  
    }  

// } else {  
//     echo "0 结果";  
// }  

// 关闭连接  
mysqli_close($conn);  

// $servername = "172.17.0.1:3306";
// $username = "root";
// $password = "root";
// // 创建连接
// $conn =
// new mysqli($servername, $username, $password);
// // 检测连接
// if ($conn->connect_error) {
// die("连接失败: " . $conn->connect_error);
// }
// echo "连接成功";

?>