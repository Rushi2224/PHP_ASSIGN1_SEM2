<?php
class Database {
    // Private variable for database connection
    private $connection;
    // Constructor method, called when an object is created
    function __construct(){
        $this->connect_db(); // Calls the connect_db() method to establish a database connection
    }
    // Method to establish a database connection
    public function connect_db(){
        // Connect to the database server with appropriate credentials
        $this->connection = mysqli_connect('172.31.22.43' ,'Rushi200552806','R5xjD0XnSX', 'Rushi200552806');
        
        // Check if the connection was successful
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error()); // Display an error message and exit if the connection fails
        }
    }
    // Method to create a new record in the database
    public function create($size, $base, $extra_cheese, $dip, $bread, $dessert){
        // SQL query to insert data into the 'Orders' table
        $sql = "INSERT INTO Orders (size, base, extra_cheese, dip, bread, dessert) VALUES ('$size', '$base', '$extra_cheese', '$dip', '$bread', '$dessert')";
        // Execute the SQL query
        $res = mysqli_query($this->connection, $sql);
        // Check if the query was successful
        if($res){
            return true; // Return true if the record was successfully created
        }
        else{
            return false; // Return false if the record creation failed
        }
    }
    // Method to sanitize input data to prevent SQL injection
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var); // Use mysqli_real_escape_string() to sanitize input
        return $return; // Return the sanitized input
    }
}
$database = new Database(); // Create an instance of the Database class
?>