<?php
/**
 * @author Team Fleg
 * @version 1.1.1
 * A class to handle services provided by City Mobile Car Washing Services
 */
include "db_config.php";
	class Service{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
        }

 /**for sanitizing data */
/**
 * @param $input
 * @method sanitizeData()
 *@return $data
 */
		public function sanitizeData($input) {
			$data = trim($input);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

/**For Car Wash Service */
/**
 * @param $fname,$lname,$email,$choose,$Phone_num,$Full_address
 * @method car_wash()
 *@return true , false
 */
        public function car_wash($fname,$lname,$email,$choose,$Phone_num,$Full_address){
            /*sanitizig the data*/
            $email =  $this->sanitizeData($email);
            $wash_type = $this->sanitizeData($choose);
            $Phone_num = $this->sanitizeData($Phone_num);
            $Full_address = $this->sanitizeData($Full_address);
            $fname =  $this->sanitizeData($fname);
            $lname =  $this->sanitizeData($lname);

            if($email!=""&&$wash_type!=""&&$Phone_num!=""&&$Full_address!=""&&$fname!=""&&$lname!=""){
               

                /**Checking the ID for the user */
                $get_id = "SELECT CustID FROM customer WHERE email = '$email'";
                $get_id_query = $this->db->query($get_id) or die($this->db->error);
                $row = $get_id_query->fetch_assoc();
                $id = $row["CustID"];
                $number = mysqli_num_rows($get_id_query);
                switch($number){
                    case 1:
                         /**Updating customer table */
                        $update = "UPDATE customer SET phone_num = '$Phone_num',Full_address='$Full_address'  WHERE email = '$email'";
                        $update_q = $this->db->query($update);
                        /**Entering the foreign key into the customer_service table */
                        $check_user = "INSERT INTO Customer_service(CustID) VALUES ('$id')";
			             $check_result = $this->db->query($check_user) or die($this->db->error);
            
                        /**Entering service id and type into the car washing table */
                        $wash  = "INSERT INTO car_washing(SERVID,CAR_WASH_TYPE) VALUES((SELECT SERVID FROM Customer_service ORDER BY SERVID DESC LIMIT 1),'$wash_type')";
                        $resultant = $this->db->query($wash) or die($this->db->error);
                        return true;
                    case 0:
                        $unregistered_customers = "INSERT INTO unregistered_customers(fname,lname,email,phone_num,address,car_wash) VALUES ('$fname','$lname','$email','$Phone_num','$Full_address','$choose')";
                        $unreg_cust_result = $this->db->query($unregistered_customers) or die($this->db->error);
                        return true;
                    default:
                        return false;
                    }
                }

                /**Else insert into an empty table if user not on system */
                else{return false;};

        }

        /**For Car Detailing Service */
/**
 * @param $fname,$lname,$email,$choose,$Phone_num,$Full_address
 * @method car_detailing()
 *@return true , false
 */

        public function car_detailing($fname,$lname,$email,$choose,$Phone_num,$Full_address){

            /*sanitizing data*/
            $detailing_type = $this->sanitizeData($choose);
            $email =  $this->sanitizeData($email);
            $Phone_num = $this->sanitizeData($Phone_num);
            $Full_address = $this->sanitizeData($Full_address);
            $fname =  $this->sanitizeData($fname);
            $lname =  $this->sanitizeData($lname);

            if($email!=""&& $detailing_type!=""&&$Phone_num!=""&&$Full_address!=""&&$fname!=""&&$lname!=""){

                /**Checking the ID for the user */
                $get_id = "SELECT CustID FROM customer WHERE email = '$email'";
                $get_id_query = $this->db->query($get_id) or die($this->db->error);
                $row = $get_id_query->fetch_assoc();
                $id = $row["CustID"];
                $number = mysqli_num_rows($get_id_query);
                 switch ($number) {
                     case 1:
                        /**Updating customer table */
                        $update = "UPDATE customer SET phone_num = '$Phone_num',Full_address='$Full_address'  WHERE email = '$email'";
                        $update_q = $this->db->query($update);
                        /**Entering the foreign key into the customer_service table */
                        $check_user = "INSERT INTO Customer_service(CustID) VALUES ('$id')";
                        $check_result = $this->db->query($check_user) or die($this->db->error);
            
                        /**Entering service id and type into the car detailing table */
                        $detail  = "INSERT INTO car_detailing(SERVID,DETAILING_TYPE) VALUES((SELECT SERVID FROM Customer_service ORDER BY SERVID DESC LIMIT 1),'$detailing_type')";
                        $resultant = $this->db->query($detail) or die($this->db->error);
                        return true;
                         break;
                      case 0:
                         $unregistered_customers = "INSERT INTO unregistered_customers(fname,lname,email,phone_num,address,car_detailing) VALUES ('$fname','$lname','$email','$Phone_num','$Full_address','$choose')";
                        $unreg_cust_result = $this->db->query($unregistered_customers) or die($this->db->error);
                        return true;
                        break;
                     
                     default:
                        return false;
                         break;
                 }
                
            }
                /**Else insert into an empty table if user not on system */
            else{return false;}

        }
        /** method For Products */
/**
 * @param $fname,$lname,$email,$choose,$Phone_num,$Full_address
 * @method products()
 *@return true , false
 */
        public function products($fname,$lname,$email,$choose,$Phone_num,$Full_address){

            $product_category = $this->sanitizeData($choose);
            $email =  $this->sanitizeData($email);
            $Phone_num = $this->sanitizeData($Phone_num);
            $Full_address = $this->sanitizeData($Full_address);
            $fname =  $this->sanitizeData($fname);
            $lname =  $this->sanitizeData($lname);

            if($email!=""&& $product_category!=""&&$Phone_num!=""&&$Full_address!=""&&$fname!=""&&$lname!=""){

                /**Checking the ID for the user */
                $get_id = "SELECT CustID FROM customer WHERE email = '$email'";
                $get_id_query = $this->db->query($get_id) or die($this->db->error);
                $row = $get_id_query->fetch_assoc();
                $number = mysqli_num_rows($get_id_query);
                $id = $row["CustID"];
                switch ($number) {
                    case 1:
                        /**Updating customer table */
                        $update = "UPDATE customer SET phone_num = '$Phone_num',Full_address='$Full_address'  WHERE email = '$email'";
                        $update_q = $this->db->query($update);
                        
                        /**Entering the foreign key into the Customer_service table */
                        $check_user = "INSERT INTO Customer_service(CustID) VALUES ('$id')";
                        $check_result = $this->db->query($check_user) or die($this->db->error);
            
                        /**Entering service id and type into the car detailing table */
                        $product  = "INSERT INTO products(SERVID,PRODUCT_CATEGORY) VALUES((SELECT SERVID FROM Customer_service ORDER BY SERVID DESC LIMIT 1),'$product_category')";
                        $resultant = $this->db->query($product) or die($this->db->error);
                        return true;
                        break;
                    case 0:
                        $unregistered_customers = "INSERT INTO unregistered_customers(fname,lname,email,phone_num,address,products) VALUES ('$fname','$lname','$email','$Phone_num','$Full_address','$choose')";
                        $unreg_cust_result = $this->db->query($unregistered_customers) or die($this->db->error);
                        return true;
                        break;
                    
                    default:
                        return false;
                        break;
                }

                
            }
                /**Else insert into an empty table if user not on system */
            else{return false;}

        }


    }


        
?>