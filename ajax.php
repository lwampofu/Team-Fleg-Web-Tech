<?php

 /**
 * @author TeamFleg
 * @version 1.0
 */
 /*checking if ajaxform has being submitted*/

/*Getting the form data using the POST Global variable*/

	$searchterm = $_POST['sterm'];
	/* execute the function AJAX_CUSTOMER which is being declared below */
	AJAX_CUSTOMER($searchterm);

    /*function definition for AJAX_CUSTOMER*/

 /**
 * @param ($shterm)
 * @method AJAX_CUSTOMER
 */
	function AJAX_CUSTOMER($shterm){

        /*declaring a constant variables for database connection*/
		define('DB_SERVER', 'cs.ashesi.edu.gh');
		define('DB_USERNAME', 'emmanuel_odonkor');
		define('DB_PASSWORD', 'emmanuel_odonkor');
		define('DB_DATABASE', 'webtech_fall2019_emmanuel_odonkor');
		
		/* Create connection*/
		$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		/* Check connection*/
		if ($connect->connect_error) 
		{
    	die("Connection failed: " . $connect->connect_error);
		}


		/*SQL FOR ISSUING OUT EMPLOYEE DETAILS*/
		$sql = "SELECT FName, LName,phone FROM employee";

		//$sql="SELECT customer.FName,customer.LName ,customer_service.service_date , products.product_category FROM customer INNER JOIN customer_service ON customer.CustID = customer_service.CustID INNER JOIN products ON customer_service.ServID = products.ServID WHERE customer.FName OR customer.LName LIKE '%$shterm%'";

		/*execution of sql query*/
		$result = $connect->query($sql);

		/*check if any result was being returned*/
		if ($result->num_rows > 0) 
		{
    	/*looping - output data of each row*/
    	while($row = $result->fetch_assoc()) 
    	{
        	echo "<b>First Name:</b> ". $row["FName"]." | <b>Last Name: </b>". $row["LName"]."<br>";
    	}

		} 
		else 
		{
			/*IF NO EMPLOYEE IS IN THE TABLE IT ISSUES OUT 'No record of Employee ' */
    	echo "No record of Employee ";
    	//echo '<b><a href="Register.php">Click to register Customer</a></b>';

		}

		}

?>