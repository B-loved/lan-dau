<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "a";
     
// tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
 
// kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 
?>
<html>
    <body>
        <form>
        <table style="width:80%">
            <tr>
                <td><h2>Title</h2></td>
                <!-- <td><button style="background-color: #efbe9b; border-radius: 4px; padding: 6px" onclick="window.history.go(-1)"> Back </button></td> -->
                <td>
                    <input style="background-color: #efbe9b; border-radius: 4px; padding: 6px" value="Back" type="button" onclick="history.back(-1)" />
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <?php
                        $sql = "select image from tbl3  where `id` = ".$_GET['id']; 
                        $result = $conn->query($sql);
                        while($row = $result->fetch_array()) {
                            echo '<img width="420" height="320" src="'.$row["image"].'">';
                        }
                    ?> 
                </td>
                <td style="vertical-align: top; padding-left: 33px; font-size: 25px;">
                    <?php
                        $sql = "select description from tbl3  where `id` = ".$_GET['id']; 
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            echo $row["description"];
                        }
                    ?> 
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>