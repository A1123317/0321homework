<html>

<head>
<meta charset='utf-8'>
</head>

<?php
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

//     if ( !mysqli_select_db($link, 'school') )
//     die("無法開啟資料庫!<br/>");
//  else
//     echo "資料庫:開啟成功!<br/>";

$sql = "SELECT * FROM homework";

mysqli_set_charset($link, 'utf8');

if ( $result = mysqli_query($link, $sql)){
    echo "<table border='1'>";
    while( $row = mysqli_fetch_assoc($result)){ 
        echo "<tr>";
        echo "<td>".$row["date"]."</td><td>".$row["score"]."</td><td></td>";
        echo "</tr>";
    }
echo "</table>";


    }



?>

</html>