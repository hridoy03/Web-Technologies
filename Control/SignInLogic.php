<?php
    session_start();
    include('dbconn.php');

    if(isset($_REQUEST['signin']))
    {

        $user = trim($_REQUEST['username']);
        $pass = trim($_REQUEST['password']);
		//$rem = trim($_Request['remeber']);
        if($user == ""){
            echo "invalid or empty email..<br>";
        }else if($pass == ""){
            echo "invalid or empty password..";
        }else{
				setcookie('user', $user, time()+60*60*7);

            $db = new db();
            $conn=$db->OpenCon();
           // $sql = "select * from activedirectory where UserName='".$user."' and Password='".$pass."'";
            $dsql = "select * from user where uid=(select uid from activedirectory where username='".$user."' and password='".$pass."')";
			/*$dsql2="SELECT * FROM `activedirectory` WHERE `UserName`='".$user."' AND `Password`='".$pass."' AND `UserTypeID`=2 ";
			$dsql3="SELECT * FROM `activedirectory` WHERE `UserName`='".$user."' AND `Password`='".$pass."' AND `UserTypeID`=3 ";*/
			
			$result = mysqli_query($conn, $dsql);
            $row = mysqli_fetch_assoc($result);
            
            //$result = mysqli_query($conn, $dsql);
			/*$result2 = mysqli_query($conn, $dsql2);
			$result3 = mysqli_query($conn, $dsql3);*/
           
            
            $count = mysqli_num_rows($result);
			/*$count2 = mysqli_num_rows($result2);
			$count3 = mysqli_num_rows($result3);*/
			
            mysqli_close($conn);
			
			if($count > 0 ){

                $_SESSION['user'] = $user;
                // header('location: ../views/home.php');
                // echo "success";
                if($row['UserTypeID'] == 1){
                    header('location:../View/ProfileAdmin.php');
                }
                else if($row['UserTypeID'] == 2){
                    header('location:../View/ProfileCustomer.php');
                }
                else if($row['UserTypeID'] == 3){
                    header('location:../View/ProfileSeller.php');
                }
            }
            else{
                echo "invalid username/password.";
            }
    
            /*if($count > 0 ){

                $_SESSION['user'] = $user;
                header('location:../View/ProfileAdmin.php');
            }
			else if($count2 > 0 ){

                $_SESSION['user'] = $user;
                header('location:../View/ProfileCustomer.php');
            }else if($count3 > 0 ){

                $_SESSION['user'] = $user;
                header('location:../View/ProfileSeller.php');
            }
			else{
                echo "invalid username/password.";
            }*/
        }

    }else{
        header('location:../View/Home.php');
        //echo "Invalid request!";
    }
?>