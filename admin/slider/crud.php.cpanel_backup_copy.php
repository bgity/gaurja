<?php 

class crud
{
	public $connect;
	private $localhost="localhost";
 	private	$username = "vishwama_ngal";
	private $password = "Q*SG9+gRTRyO";
	private $dbname = "vishwaman_ayurveda";
	function __construct()
	{
		 $this->db_connection();
	}
	public function db_connection()
	{
		$this->connect=mysqli_connect($this->localhost,$this->username,$this->password,$this->dbname);
		mysqli_query($this->connect,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	}
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
    	$sql = "SELECT * FROM `tbl_slider`";
        $result = mysqli_query($this->connect,$sql);
        if (mysqli_num_rows($result)>0) 
        { 
        	$table = "";
        	$i=1;
        	while ($row=mysqli_fetch_assoc($result)) {
        	$table .= "<tr>
                <td>".$i."</td>
                <td>".$row['title']."</td>
               
                <td> <img src='../".$row['slider_image']."' style='width: 100px;'></td>
                <td><a href='javascript:void(0)' onclick='editslider(".$row['id'].")' ><button type='button' rel='tooltip' class='btn btn-sm btn-warning '>
                                            <i class='material-icons'>edit</i>
                                        </button></a>
            | <a href='javascript:void(0)' onclick='deleteslider(".$row['id'].")' ><button type='button' rel='tooltip' class='btn btn-sm btn-danger '>
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
          $sql = "SELECT * FROM `tbl_slider` WHERE `id`='$eid'";
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
         $destination = "../../assets/images/images_slider/" . $new_name;	
         if(move_uploaded_file($file['tmp_name'], $destination))
         {
               return "assets/images/images_slider/".$new_name;
         } 
         else{
              
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


