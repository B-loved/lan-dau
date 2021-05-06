<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "a";
     
// tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
 
// kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 
$sql = 'select * from tbl3 ';
$result = $conn->query($sql);
?>


<style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
  font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#f0f0f0;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
  font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>


<table class="tg" style="table-layout: fixed; width: 676px">
<colgroup>
<col style="width: 65px">
<col style="width: 166px">
<col style="width: 445px">
</colgroup>
<thead>
  <tr>
    <th class="tg-7btt">ID</th>
    <th class="tg-7btt">Thumb</th>
    <th class="tg-7btt">Title</th>
  </tr>
</thead>
<tbody>
    <h2>Frontend</h2>
<?php
    while ($row = $result->fetch_assoc()){
        echo'<tr>
                <td class="tg-c3ow"><a style="text-decoration: none;color: blue " href="show.php?id='.$row['id'].'&action=show">'.$row['id'].'</a></td>  
                <td class="tg-c3ow"><img src="'.$row["image"].'" alt="Image" width="84" height="66"></td>
                <td class="tg-0pky"><a style="text-decoration: none;color: blue " href="show.php?id='.$row['id'].'&action=show">'.$row['description'].'</a></td>
            </tr>';
    }
?>
    
</tbody>
</table>