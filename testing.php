<?php 
/**
 * @author Team Fleg
 * @version 1.1.0
 */

//include the user and service class files 
require('class.user.php');
require('class.service.php');

//include the php unit test class
use PHPUnit\Framework\TestCase;

class projectTest extends TestCase {

    /**
    * @method testLogin() */
    /** method to check if login is successful */
    public function testLogin(){
        $user = new User();
        $login = $user->check_login('lmalaba@ashesi.edu.gh','password');
        $this->assertEquals('true',$login);
    }

    /**check if the login is successful */
    /**
    * @method login_displays_the_login_form() */
    public function login_displays_the_login_form()
{
        $response = $this->get(route('log_In_Page'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
}

    /**check if user has beeen successfully registered */
    /**
    *@method testIfRegistrationTrue() */
    public function testIfRegistrationTrue()
{       $user = new User();
        $register = $user->reg_user($fname,$lname,$email,$password);
        $this->assertTrue($register);
}
    /**method to test if email is valid */
    /**
    * @method isEmailValid() */
    public function isEmailValid(){
        $service= new Service();
        $car_wash_service=$service->car_wash('Lwasi','Malaba','0555099130',"lmalaba@ashesi.edu.gh",'Halels','INTERIOR AND EXTERIOR CAR WASH: GHS20.00');
        $email = "lmalaba@ashesi.edu.gh";
        $this->assertGreaterThan(0,strlen($email));
        $this->assertContains("@",$email);
    
    }
    
}

?>