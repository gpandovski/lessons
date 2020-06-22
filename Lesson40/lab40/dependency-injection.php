<?php

//Dependency Injection (DI) is a fancy term for "passing things in".
//


/**
 * Class Log
 * A really simple logging class that writes flat data to a file.
 */
class FooLogger {

    private $handle, $dateFormat;

	public function __construct($file, $mode = "a") {

		$this->handle = fopen($file, $mode);
		$this->dateFormat = "d/M/Y H:i:s";
	}

	public function dateFormat($format) {
		$this->dateFormat = $format;
	}

	public function getDateFormat() {
		return $this->dateFormat;
	}

	/**
	 * Writes info to the log
	 * @param mixed, string or an array to write to log
	 * @access public
	 */
	public function log($entries) {
		if(is_string($entries)) {
			fwrite($this->handle, "Error: [" . date($this->dateFormat) . "] " . $entries . "\n");
		} else {
			foreach($entries as $value) {
				fwrite($this->handle, "Error: [" . date($this->dateFormat) . "] " . $value . "\n");
			}
		}
	}
}

//Without dependency injection
//When setting a dependency, there's nothing confirming that the dependency won't change at some point, which could lead in unexpected results. 
// class Component {
//     private $logger;

//     public function __construct() {
//         $this->logger = new Log("application_log.txt");
//     }

//     public function doSomething() {
//         $ok = false;
//         // some code
//         if($ok) {
//             return true;
//         } else {
//             $this->logger->log("Somthing is not ok!");
//         }
//     }

// }

// In some other file



class Component {
    private $logger;

    public function __construct(  $logger) {
        $this->logger = $logger;
    }

    public function doSomething() {
        $ok = false;
        // some code
        if($ok) {
            return true;
        } else {
            $this->logger->log("Somthing is not ok!");
        }
    }
}

class OtherComponent {
    private $logger;

    public function __construct(  $logger) {
        $this->logger = $logger;
    }

    public function doSomething() {
        $ok = false;
        // some code
        if($ok) {
            return true;
        } else {
            $this->logger->log("Somthing is not ok!");
        }
    }
}

// in some other file of our application
// $logger = new FooLogger();

// $component = new Component(new FooLogger());
// $otherComponent = new OtherComponent(new FooLogger());
// $component->doSomething();

// file DatabaseConnection.php
class DatabaseConnection {
    //some connection to database
    public function save($smth) {

    }
}
// file Component.php
class Component {
    private $logger;
    private $pdfGenerator;
    private $databaseConnection;


    public function __construct(DatabaseConnection $databaseConnection, $pdfGenerator) {
        $this->pdfGenerator = $pdfGenerator;
        $this->databaseConnection = $databaseConnection;
    }

    public function setLogger($logger) {
        $this->logger = $logger;
    }

    public function core() {
        $this->logSave(); 
           
        $this->databaseConnection->save("Some data from work");
    }

    public function generatePdf() {
        $this->pdfGenerator->generatePdf();
        // $pdfGenerator = new Mpdf();
        // $pdfGnerator->html("");
        // $pdfGenerator->output();
    }
    public function logSave() {
         if ($this->logger) {
            $this->logger->log('saving');
        }
    }
}


// file OtherComponent.php
class OtherComponent {

}

// index.php file of our application
$component = new Component(new DatabaseConnection(), new Mpdf());
$logger = new FooLogger();
$component->setLogger($logger);

$component->core();