
<?php
/*session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
	*/
//$uname = $_SESSION["uname"];//CHALAPATHi
//$pswd = $_SESSION["pswd"];
$uname="ansadmin";
$pswd="ansadmin@123";


 
if (isset($_POST["submit"])) {
  
      $ser=file_get_contents("test.csv");
	  
	   $ser=json_encode($ser);
	   
	
	
$f= $_POST["hs"];
switch ($f) {
	
	      case "UC":
		    $k= $_POST['name'];
            $n= $_POST['id'];
            $out=shell_exec("powershell -file linux1.ps1  -case 2 -k $k -n $n -ser $ser -uname $uname -pswd $pswd ");
            echo '<pre>';
			print_r($out);
            echo"user creation";
            break;


           case "UR":
		    $k= $_POST['name'];
            $out=shell_exec("powershell -file linux1.ps1  -case 3 -k $k -ser $ser -uname $uname -pswd $pswd ");
            echo '<pre>';
			print_r($out);
            echo "user deletion";
           
            break;
            case "GA":
			
			$k= $_POST['name'];
            $n= $_POST['id'];
            $out=shell_exec("powershell -file linux1.ps1  -case 4 -k $k -n $n -ser $ser -uname $uname -pswd $pswd ");
            echo '<pre>';
			print_r($out);
            echo "group add";
            break;
	
          case "-mu" or "-cu" or "-la" or "-tcu" or "-tmcp" or "-sms":
            $out=shell_exec("powershell -file linux1.ps1 -case 1 -option1 -hcs -option2 $f -ser $ser -uname $uname -pswd $pswd ");
            echo '<pre>';
			print_r($out);
			break;
          
          case "rac":
            $out=shell_exec("powershell -file linux1.ps1  -case 1 -option1 -rac -option2 uname -ser do");
            echo '<pre>';
			print_r($out);
            break;
		  
          default:
            echo "something went wrong";
      }

}

?>
