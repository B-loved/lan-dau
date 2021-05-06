<html>
<body>
<style type="text/css">
.tg  {border-collapse:collapse;border-color:#ccc;border-spacing:0;}
.tg td{background-color:#fff;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
  font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#f0f0f0;border-color:#ccc;border-style:solid;border-width:1px;color:#333;
  font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
.pagination {
  display: inline-block;
}

.pagination a {
  color: #0078ce;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #0078ce;
  color: white;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
}
</style>
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
<table style="width:60%">
    <tr>
        <td><h2>Manage</h2></td>
        <td><button style="background-color: #efbe9b; border-radius: 4px; padding: 6px" onclick="window.location = 'nguyen.php'"> New </button></td>
    </tr>
</table>


<table class="tg" style="table-layout: fixed; width: 636px">
<colgroup>
<col style="width: 57px">
<col style="width: 110px">
<col style="width: 225px">
<col style="width: 90px">
<col style="width: 154px">
</colgroup>
<thead>
    <tr>
        <th class="tg-baqh">ID</th>
        <th class="tg-baqh">Thumb</th>
        <th class="tg-baqh">Title</th>
        <th class="tg-baqh">Status</th>
        <th class="tg-baqh">Action</th>
    </tr>
</thead>
<tbody>
    <?php
    while ($row = $result->fetch_assoc()){
        echo'<tr>
                <td class="tg-baqh">'.$row['id'].'</td>
                <td class="tg-0lax"><img src="'.$row["image"].'" alt="Image" width="84" height="66"></td>
                <td class="tg-baqh">'.$row["title"].'</td>
                <td class="tg-baqh">'.$row['status'].'</td>
                <td class="tg-baqh"><a href="show.php?id='.$row['id'].'&action=show" >Show</a> | <a href="edit.php?id='.$row['id'].'&action=edit"> Edit </a> | <a href="action.php?id='.$row['id'].'&action=delete"> Delete </a></td>
            </tr>';
        }
    ?>     
</tbody>
</table>
    <tr>
        <td>
            <div style="width: 200; float: left;">
                <label>Page:</label>
                <select name="page" style="height: 35px; margin-top: 13px;">
                    <option value="all"> All </option>
                    <option name="5" value="5"> 5 </option>
                    <option value="10"> 10 </option>
                    <option value="50"> 50 </option>
                </select>
            </div>
        </td>
        <td>    
            <div class="pagination" style="width: 400; margin-top: 11px;">
                <a href="#">&laquo;</a>
                <a href="#"class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </td>
    </tr>
    
</body>
</html>