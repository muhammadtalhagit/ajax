<?php
include('config.php');

$conn = "Select * from `getdata`";
$cone = mysqli_query($connection,$conn);
if($cone){
    if(mysqli_num_rows($cone) > 0 ){
        while($row = mysqli_fetch_assoc($cone)){
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            
        </tr>';
        }
    }
}  

?>