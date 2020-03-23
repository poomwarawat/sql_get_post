<?php
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
        $sql = "SELECT * FROM comment;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);

        if($result_check > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<p class='comment-box' >name :" . $row["data"] . "</p>";
            }
        }else{
            echo "Error";
        }
    ?>
    <form action="addComment.php" method="POST">
        <p>Write your comment : </p>
        <input name="data" class="input-box" placeholder="Enter your comment"></input><br><br>
        <button type="submit" name="submit" class="btn-click">Send</button>
    </form> 
</body>
</html>