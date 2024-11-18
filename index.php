<?php
$limit = 16;
$start = 0;
$offset = 4;
for($i =0;$i<=4;$i++){
  
        for ($j=0; $j < 4; $j++) {
            if($start <= $limit){
                $array[$i][$j] = $start+1;
               
            }
           
        }
}
echo '<pre>';print_r($array);die;
if(isset($_POST['submit'])){
   $row = $_POST['grid'];
   echo $row;
   $value = ($row*$row)+1;
   
  
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="grid" id="grid">
        <input type="submit" name="submit" value="submit">
    </form>
        <br><br>
    <?php
        if(isset($row)){ ?>
            <table>
                <?php 
                for($i=1;$i<=$row;$i++){ 
                ?>
                <tr>
                    <?php 
                    for($j=1;$j<=$row;$j++){ ?>
                        <td> 
                            
                        </td>
                    <?php } ?>
                </tr>
               <?php } ?>
            </table>
        <?php }
    ?>
</body>
</html>