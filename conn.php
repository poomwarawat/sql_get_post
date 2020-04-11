<?php
    //สร้างการเชื่อมต่อกับฐานข้อมูล
    $servername = "localhost";
    $username = "poom";
    $password = "12345678";
    $db = "comment";
    
    //เขื่อมต่อ
    $conn = mysqli_connect($servername, $username, $password, $db);
?>