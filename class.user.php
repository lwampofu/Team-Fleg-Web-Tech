<?php 
/**
 * @author Team Fleg
 * @version 1.1.1
 * A class to handle user info provided by City Mobile Car Washing Services
 */
	include "db_config.php";
	include "send_reset_email.php";
	class User{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}

		/**for sanitizing data */
		public function sanitizeData($input) {
			$data = trim($input);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		/*** for registration process ***/

/**
 * @param $fname,$lname,$password,$email
 * @method reg_user()
 *@return true , false
 */
		public function reg_user($fname,$lname,$password,$email){
			/*Sanitizing user inputs*/
			$fname = $this->sanitizeData($fname);
			$lname = $this->sanitizeData($lname);
			$password = $this->sanitizeData($password);
			$email = $this->sanitizeData($email);
			$password = md5($password);
			//checking if the username or email is available in db
			$query = "SELECT * FROM customer WHERE email='$email'";
			$result = $this->db->query($query) or die($this->db->error);
			$count_row = $result->num_rows;
			
			//if the username is not in db then insert to the table
			
			if($count_row == 0 && $fname!=""&&$password!=""&&$email!=""&&$lname!=""){
				$query = "INSERT INTO customer SET password='$password', fname='$fname', lname='$lname',email='$email'";
				
				$result = $this->db->query($query) or die($this->db->error);
				
				return true;
			}
			else{return false;}
			
			
			}
			
			
	/*** for login process ***/

/**
 * @param $password,$email
 * @method check_login()
 *@return true , false
 */
		public function check_login($email, $password){
			/**Sanitize data */
			$email = $this->sanitizeData($email);
			$password = $this->sanitizeData($password);
			$password = md5($password);
			
			/**select user from customer table */
			$query = "SELECT CustID from customer WHERE email='$email' and password='$password'";
			$result = $this->db->query($query) or die($this->db->error);
			$user_data = $result->fetch_array(MYSQLI_ASSOC);
			$count_row = $result->num_rows;
	
			if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['uid'] = $user_data['CustID'];
	            return true;
	        }
			
			else{return false;}
		
			}

		/*for comments*/
		/**
 * @param $username, $password,$email
 * @method post_feedback()
 *@return true , false
 */
		public function post_feedback($username,$email,$feedback){
			/**sanitize data */
			$uname = $this->sanitizeData($username);
			$uemail = $this->sanitizeData($email);
			$ufeedback =$this-> sanitizeData($feedback);
			
			if($uname!=""&& $uemail!="" && $ufeedback!=""){
				$query = "INSERT INTO feedback SET username='$uname',email='$uemail', comments='$ufeedback'";
				$result = $this->db->query($query) or die($this->db->error);
				return true;
			}
			
			else {return false;}
				
		}

		/*Change Password*/
		/**
 * @param $password,$confirmpassword
 * @method changepass()
 *@return true , false
 */
		public function changepass($password,$confirmpassword){
			/**sanitize data */
			$password = $this->sanitizeData($password);
			$confirmpassword = $this->sanitizeData($confirmpassword);
		   // $_SESSION['uid'] = $user_data['CustID'];
			
			if($password!=""&&$confirmpassword!=""&&$password==$confirmpassword){
				$password = md5($password);
				$sql = "UPDATE customer SET password='$password' WHERE CustID='".$_SESSION['uid']."'" ;
				$sql_query = $this->db->query($sql); //or die($this->db->error);
				if($sql_query){
					header("location:Log_In_Page.php");

					return true;
				}
				else{return false;}
			}
			
		}

		/*Forgot Password*/
/**
 * @param $email
 * @method forgotpass()
 *@return  false
 */

		public function forgotpass($email){
			$email = $this->sanitizeData($email);

			if($email!=""){
				$query = "SELECT email FROM customer WHERE email = '$email'";
				$query_r = $this->db->query($query) or die($this->db->error);
				$check_query = $query_r->num_rows;
				switch($check_query){
					case 1:
						// generate a unique random token 5 digits
        				$token = random_int(18401,19976);
						$token =md5($token);
						//$token = ($token);
            			//delete entry and update with the new one if email already exists in the table
            			$duplicate_prevent ="DELETE FROM password_resets WHERE email='$email'";
            			$duplicate_result = $this->db->query($duplicate_prevent) or die($this->db->error);

            			// store token in the password-reset database table against the user's email
            			$sql = "INSERT INTO password_resets(email,token,expires) VALUES ('$email', '$token',NOW()+ INTERVAL 48 HOUR)";
            			//$results = mysqli_query($db, $sql);
            			$results = $this->db->query($sql) or die($this->db->error);

            			SendResetEmail($email,$token);//function to send the reset link
            			header('location: new_password.php');					
            		default:
            			echo "Email not valid!";
						return false;
				}
                		}

                	}
        /**This function allows a user who has forgotten their password to enter a new one*/
  /**
 * @param $new_password,$confirm_password,$confirm_token
 * @method reset_password()
 *@return  false
 */
		public function reset_password($new_password,$confirm_password,$confirm_token){
					$new_password = $this->sanitizeData($new_password);
					$confirm_password = $this->sanitizeData($confirm_password);
					$confirm_token = $this->sanitizeData($confirm_token);
					$new_password = md5($new_password);

					if(!empty($new_password)&&!empty($confirm_password)&&!empty($confirm_token)){
						$qry="SELECT token FROM password_resets WHERE token='$confirm_token'";
                		$result=$this->db->query($qry) or die("didn't update");//or die($this->db->error);
                		$token = mysqli_fetch_assoc($result)['token'];

                		$count = $result->num_rows;

                		switch($count){
                			case 1:
                				//removing old token if not deleted
                				$old_token = "DELETE FROM password_resets WHERE expires<NOW()";
                				$res = $this->db->query($old_token) or die($this->db->error);
                				//selecting email from a row that matches the token entered by the user
                				$mysql = " SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
                				$results = $this->db->query($mysql) or die($this->db->error);
                				$email = mysqli_fetch_assoc($results)['email'];
                				/*update password*/
                				$sql = "UPDATE customer SET password='$new_password' WHERE email='$email'";
                				$query = $this->db->query($sql) or die($this->db->error);

                				//deleting the token to ensure that it is not used twice
                				$used_token = "DELETE FROM password_resets WHERE token='$token'";
                				$used_rslt = $this->db->query($used_token) or die($this->db->error);

                				

                				header("location: Log_In_Page.php");
                			default:
                				return false;
					}
				}
			}

		
	
}