<?php
    // import การเชื่อมต่อ
    include_once "conn.php";

    //เมื้อกี้เราส่ง input ที่มี name ว่า data มา เราจึงต้องมารับค่าแล้วเก็บไว้ในตัวแปรด้วยบรรทัดด้านล่าง
    $data = $_POST["data"];
    //สั่ง INSERT เข้า table ที่มีชื่อว่า comment โดย insert เข้า row ที่ชื่อว่า data ด้วยตัวแปร $data
    $sql = "INSERT INTO `comment` (`data`) VALUES ('$data');";
    mysqli_query($conn, $sql);

    //สั่ง URL เมื่อทำการเก็บ Data เข้า database ให้ไปที่ index.php?addComment=success
    header("Location: ../getsql/index.php?addComment=success");
    
?>