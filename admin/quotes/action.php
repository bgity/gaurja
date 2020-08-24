<?php 


			
      extract($_POST);


switch ($action) {
  case 'selectall':
    $sql = "SELECT * FROM `tbl_quotes`";
$result = mysqli_query($conn, $sql);
$table = "";
   
if (mysqli_num_rows($result) > 0) 
   {
   $in = 1;
    while($row = mysqli_fetch_assoc($result)) 
     {
       $table .= "<tr>
        <td>".$in."</td>
        <td>".$row['title']."</td>
        <td>".$row['cdate']."</td>
        <td><a href='javascript:void(0)'  onclick='editfun(".$row['id'].")'><button type='button' rel='tooltip' class='btn btn-sm btn-warning '>
                                            <i class='material-icons'>edit</i>
                                        </button></a></td>
        <td><a href='javascript:void(0)'  onclick='deleted(".$row['id'].")'><button type='button' rel='tooltip' class='btn btn-sm btn-danger '>
                                            <i class='material-icons'>close</i>
                                        </button></a></td>
      </tr>";
       $in++;
     }

} else {
    echo "0 results";
}
   
  echo "$table";
    break;

  case 'edit':
     $sql = "SELECT * FROM `tbl_quotes` WHERE `id`='$eid'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo json_encode($row);
  break;

    case 'editsubmit':
       $udate = date('Y-m-d');
       $sql = "UPDATE `tbl_quotes` SET `title`='$service_name',`udate`='$udate' WHERE `id`='$proid'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
         echo "Updeted";
       }
       else
       {
         echo "Something went wrong!";   
       }
    break;

    case 'insert':
       
      $sql = "INSERT INTO `tbl_quotes`(`title`) VALUES ('$service_name')";

if (mysqli_query($conn, $sql)) {
    echo "Inserted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    break;

    case 'deleted':
       
      $sql = "DELETE FROM `tbl_quotes` WHERE `id` = '$proid'";

if (mysqli_query($conn, $sql)) {
    echo "Deleted";
} else {
    echo "Something went wrong!";
}
    break;

  default:
    # code...
    break;
}

?>

