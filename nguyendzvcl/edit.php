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
$sql = 'select * from tbl3 ';
$result = $conn->query($sql);
?>
<html>
    <body>
        <form action="action.php?id=<?php echo $_GET['id'] ?>">
        <table style="width:80%">
            <tr>
                <td><h2>Edit</h2></td>
                <td> 
                    <!-- <button style="background-color: #efbe9b; border-radius: 4px; padding: 6px"onclick="window.location = 'show.php?id='.$row['id'].'&action=show'"> Show </button> -->
                    <button style="background-color: #efbe9b; border-radius: 4px; padding: 6px"onclick="window.location = 'show.php'"><a style="text-decoration: none; color:black" href="show.php?id=<?php echo $_GET['id']?>&action=show"> Show </a></button>
                    <button style="background-color: #efbe9b; border-radius: 4px; padding: 6px" onclick="window.history.back()"> Back </button>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td><b>Title:</b></td>
                <td><input type="text" name="title" placeholder="Title"><br></td>
            </tr>
            <tr>
                <td><b>Description:</b></td>
                <td><textarea rows="5" cols="50" name="description" placeholder="Description"></textarea><br></td>
            </tr>
            <tr>
                <td><b>Image:</b></td>
                <td style="line-height: 0px;"><input type="file" name="image"><br><br></td>
            </tr>
            
            <?php
                $sql = "select image from tbl3  where `id` = ".$_GET['id']; 
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo'<tr>
                            <td></td>
                            <td><img width="120" height="120" src="'.$row["image"].'"></td>
                        </tr>';
                }
            ?> 

            <tr>
                <td><b>Status</b></td>
                <td>
                    <select name="status" style="height: 25px">
                        <option value="Enabled">Enabled</option>
                        <option value="Disabled">Disabled</option>
                    </select>
                </td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="hidden" name="action" value="edit">
        </table>
            <input style="margin-top: 11px; width: 76px;" type="submit" value="Submit">
        </form>
        
    </body>
</html>