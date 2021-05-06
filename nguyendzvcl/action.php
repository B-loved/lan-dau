<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "a";

    // tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $action = $_GET['action'];
    if ($action == 'add'){
        $title = $_GET['title'];
        $description = $_GET['description'];
        $image = $_GET['image'];
        $status = $_GET['status'];
        
        $sql = "insert into tbl3 (id, title, description, image, status) values ('$id', '$title', '$description', '$image', '$status')";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: manage.php");
    }
    elseif ($action == 'edit'){
        $title = $_GET['title'];
        $description = $_GET['description'];
        $image = $_GET['image'];
        $status = $_GET['status'];

        $sql = "update tbl3 set `title`='".$title."', `description`='".$description."', `image`='".$image."', `status`='".$status."' where `id` =".$_GET['id']; 
        $result = $conn->query($sql);
        $conn->close();
        header("Location: manage.php");
    }
    elseif ($action == 'delete'){
        $sql = "delete from tbl3 where `id` = ".$_GET['id']; 
        $result = $conn->query($sql);
        $conn->close();
        header("Location: manage.php");
    }

?>