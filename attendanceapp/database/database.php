<?php 
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "attendance_db";
    private $port = 3309;  // Specify the port
    public  $conn = null;
    
    public function __construct() {
        try {
            // Include the port in the DSN
            $this->conn = new PDO("mysql:host=$this->servername;port=$this->port;dbname=$this->dbname", $this->username, $this->password);
            // Set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>
