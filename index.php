<?php
    //import การเชื่อมต่อ
    include_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data</title>
</head>
<style>
    .comment-box{
        color : black;
        padding : 20px;
        border : 1px solid black;
    }
    .input-box{
        width : 300px;
    }
    .btn-click{
        width:100px;
        height:50px;
        padding:10px;
    }
</style>
<body>
    <?php
        //  Get Data มาจาก Database ที่ชื่อว่า comments
        $sql = "SELECT * FROM comment;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                //แสดงข้อมูลออกมาเป็น แท็ก p โดยข้อมูลที่แสดงคือ row ที่มีชื่อว่า data
                //"<form " . "action='/getProduct.php?id='" . "'" . $row['id'] . "'" . "method='POST' >";
                echo "<form class='comment-box' action='/getsql/getProduct.php?id=$id' method='POST'>";
                    echo "<p>";
                        echo $row['data'];
                    echo "</p>";
                    echo "<button type='submit' " . "id='" . $row['id'] . "'" . ">"; 
                        echo "id= " . $row['id'];
                    echo "</button>";
                echo "</form>";
                // echo "<p class='comment-box' id=".$row['id']."  >  name :" . $row["data"] . "</p>";
            }
        }else{
            echo "Error";
        }
    ?>
    <!-- สร้าง form สำหรับการ comment acthion="addComment.php คือ สั่งให้ไปหน้า addComment.php เมื่อกดปุ่ม Send" 
    method="POST" คือการบอกให้เราส่งข้อมูลไปโดยในที่นี้เราส่ง input ที่มี name ว่า data
    -->
    <form action="addComment.php" method="POST">
        <p>Write your comment : </p>
        <input name="data" class="input-box" placeholder="Enter your comment"></input><br><br>
        <button type="submit" name="submit" class="btn-click">Send</button>
    </form> 
</body>
</html>