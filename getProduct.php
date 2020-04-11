<?php
    include "conn.php";

    //get id from url
    $id = $_GET['id'];
    // Select data from comment table with id is $id
    $sql =  "SELECT * FROM comment WHERE id = $id";

    // query data from sql การดึงข้อมูล
    $result = mysqli_query($conn, $sql);

    //check length of result
    $result_check = mysqli_num_rows($result);

    //check result if result more than 0 if function
    if($result_check > 0){
        //get data from this row
        $row = mysqli_fetch_assoc($result);
        //get data at data attribute 
        echo $row['data'];
    }
?>