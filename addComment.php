<?php
    include_once "conn.php";
    
    $data = $_POST["data"];

    $sql = "INSERT INTO `comment` (`data`) VALUES ('$data');";
    mysqli_query($conn, $sql);

    header("Location: ../getsql/index.php?addComment=success");
    
?>