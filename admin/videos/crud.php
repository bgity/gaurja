<?php 
include '../dbclass.php';
class crud extends dbconn
{
	
    public function authentication($user,$pass)
    {
         $sql = "SELECT * FROM `admin` WHERE `username`='$user' AND `password`='$pass'";
         $result = mysqli_query($this->connect,$sql);
         if (mysqli_num_rows($result)>0) 
         {
         	 $row=mysqli_fetch_assoc($result);
         	 $_SESSION['login']=true;
         	 $_SESSION['uname']=$row['username'];
         	 echo "yes";
         }
         else
         {
         	echo "no";
         }
    }
    public function logoutfun()
    {
    	unset($_SESSION['uname']);
        session_destroy();
       header("Location:index.php");
       exit;
    }

    public function selectall()
    {
    	$sql = "SELECT * FROM `tbl_youtube_videos`";
        $result = mysqli_query($this->connect,$sql);
        if (mysqli_num_rows($result)>0) 
        { 
        	$table = "";
        	$i=1;
        	while ($row=mysqli_fetch_assoc($result)) {
        	$table .= "<tr>
                <td style='width:10%;'>".$i."</td>
                <td>".$row['video_title']."</td>
                <td>".$row['youtube_link']."</td>
               
                <td> <img src='../".$row['video_image']."' style='width: 100px;'></td>
                <td  class='text-center'><a href='javascript:void(0)' onclick='editvideos(".$row['id'].")' ><button type='button' rel='tooltip' class='btn btn-sm btn-warning '>
                                            <i class='material-icons'>edit</i>
                                        </button></a>
            | <a href='javascript:void(0)' onclick='deleteservice(".$row['id'].")' ><button type='button' rel='tooltip' class='btn btn-sm btn-danger '>
                                            <i class='material-icons'>close</i>
                                        </button></a>
                </td>

              </tr>";
        	 $i++;
        	} 
         
        	return $table;
        }
        else
        {
        	echo "Not Data found";
        }
    }

    public function editfun($eid)
    {
          $sql = "SELECT * FROM `tbl_youtube_videos` WHERE `id`='$eid'";
        $result = mysqli_query($this->connect,$sql);
        $row=mysqli_fetch_assoc($result);
        return json_encode($row);

    }

    public function uploadfile($file)
    { 
    	if (isset($file) && !empty($file)) 
    	{
    	 $extention = explode('.', $file['name']);
         $new_name = rand() . "." . $extention[1]; 
         $destination = "../../assets/images/video/" . $new_name;	
         if(move_uploaded_file($file['tmp_name'], $destination))
         {
               return "assets/images/video/".$new_name;
         } 
         else{
                return "Not uploaded";
         } 
        
    	}
    	else
    	{

           return "false";    
         }
    }

    public function exe_query($query)
    {
    	if(mysqli_query($this->connect,$query))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    	
    }


}


?>