<?php
include("admin/config/dbconnect.php");



$num_per_page=4;

if(isset($_GET["page"])){
    $page=$_GET["page"];
}
else{
    $page=1;
}

$start_from=($page-1)*4;
$dummy_query="select * from tbl_dummy limit $start_from,$num_per_page";
$dummy_data=$conn->query($dummy_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No</th>
            </tr>

            <?php while($row = $dummy_data->fetch_assoc()){
                       ?>
                        <tr>
                        <td><?php echo $row['id'];?></td>
                         <td><?php echo $row['name'];?></td>
                         <td><?php echo $row['class'];?></td>
                         <td><?php echo $row['roll'];?></td>
                         

                        </tr>
                        <?php } ?>
        </table>

        <?php 
        $dummy_query="select * from tbl_dummy";
        $result=$conn->query($dummy_query);
        $total_record=$result->num_rows;
        
        $total_pages=ceil($total_record/$num_per_page);
        
        for($i=1;$i<=$total_pages;$i++){
            echo "<a href='pagin.php?page=".$i."'>".$i."</a>";
        }
        ?>
    </div>
</body>
</html>