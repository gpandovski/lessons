<?php
// Try catch
/**
 * Exceptions are states of the scripts the require special treatment because the script is not running as it is supposed to.
 * 
 */

 //package Mailer - class Mailer

// your code
class ConfigNotFoundException extends Exception {};
class ServiceNotAvailableException extends Exception {};

try {

    Mailer::sendEmail($to, $subject, $body); 

    // 1) throw new ConfigNotFoundException("Mail config error"); 

     // this code will execute if there is no mistakes
} catch (ConfigNotFoundException $e) {
    // notify deveoper that config file missing


    // echo " Login not correct";
    // what to do ?
    // Send email to developer/admin
    // notify user that smth went wrong
    // plan ( B )
    // show nice message , please wait our server not awailable 
} catch (ServiceNotAvailableException $e) {
    // notify system adminstration // check internet provider, check Mailer service
    echo " Password not correct";
} finally {

}
// this code 
// your code
 
// Basic usage

//creating a function, which throws an exception
function check_num($number) {
    if($number>1) {
      throw new Exception("The value has to be 1 or lower");
    }
    return true;
  }
  
  //triggering the exception
  check_num(3);

    //creating a function containing a potential exception
    function checkNumber($number) {
        if($number > 1) {
          throw new Exception('The value has to be 1 or lower');
        }
        return true;
      }
    
      //triggering the exception inside a try()
      try {
        checkNumber(2);
        //In case the exception gets thrown, this is the message that is shown.
        echo 'The value is 1 or lower';
      } catch(Exception $e) {
        //catching the exception
        echo 'Message: ' .$e->getMessage();
      }

// Exceptions
class MainException extends Exception {};
class SubException extends Exception {};
​
try {
    throw new SubException;
} catch (MainException |  SubException $e) {
    echo "Exception thrown: " . get_class($e);
}

//A Real-World Example

try {
    // init bootstrapping phase
 
    $config_file_path = "config.php";
 
    if (!file_exists($config_file_path))
    {
      throw new Exception("Configuration file not found.");
    }
  
    // continue execution of the bootstrapping phase
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

class ConfigFileNotFoundException extends Exception {}
 
try {
    // init bootstrapping phase
 
    $config_file_path = "config.php";
 
    if (!file_exists($config_file_path))
    {
      throw new ConfigFileNotFoundException("Configuration file not found.");
    }
  
    // continue execution of the bootstrapping phase
} catch (ConfigFileNotFoundException $e) {
    echo "ConfigFileNotFoundException: ".$e->getMessage();
    // other additional actions that you want to carry out for this exception
    die();
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

// FINALLY
try {
    // code
   
    // if something is not as expected
        // throw exception using the "throw" keyword
   
    // code, it won't be executed if the above exception is thrown
  } catch (Exception $e) {
    // exception is raised and it'll be handled here
    // $e->getMessage() contains the error message
  } finally {
    // code, it'll always be executed
  }

  // FILE
try {
    $handle = fopen("c:\\folder\\resource.txt", "r");   
    // do some stuff with the file
​
    throw new Exception("Exception thrown");
} catch (Exception $e) {
    echo "Exception thrown" . $e->getMessage();
} finally {
    fclose ( resource $handle );
}