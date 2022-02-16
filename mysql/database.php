<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "mydb";

// creating connection
$conn = mysqli_connect($serverName, $userName, $password, $database);

// Checking connection
if (!$conn) {
    echo "Could not connect to database: " . mysqli_connect_error();
}

echo "Connected to database";


// creating database 
$db = "CREATE DATABASE mydb";

function createDatabase($conn, $db)
{
    if (mysqli_query($conn, $db)) {
        echo "\nDatabase is created successfully";
    } else {
        echo "\nError creating database" . mysqli_error($conn);
    }
}


$createTable = "CREATE TABLE employee ( empId INT(6) AUTO_INCREMENT PRIMARY KEY, empname VARCHAR(30) NOT NULL, emploc VARCHAR(30) NOT NULL)";

// creating table 
function createTable($conn, $createTable)
{
    if (mysqli_query($conn, $createTable)) {
        echo "Table employee is created successfully";
    } else {
        echo "Error in creating table employee: " . mysqli_error($conn);
    }
}


$insertValue = "INSERT INTO employee (empId, empname, emploc) VALUES(15236, 'pavan', 'Hyderabad'),(15237,'kamal', 'Hyderabad'),(15238,'sai Teja', 'Hyderabad')";


// inserting single query
function insertSingleQuery($conn, $insertValue)
{
    if (mysqli_query($conn, $insertValue)) {

        // get last id from table
        $last_Id = mysqli_insert_id($conn);

        echo "New record is created successfully. Last id is : " . $last_Id;
    } else {
        echo "Value is not inserted: " . mysqli_error($conn);
    }
}

// inserting multiple query

$insertValue1 = "INSERT INTO employee (empId, empname, emploc) VALUES(15242, 'pavan2', 'Hyderabad'),(15243,'kamal2', 'Hyderabad'),(15244,'sai Teja2', 'Hyderabad')";

$insertValue1 = "INSERT INTO employee (empId, empname, emploc) VALUES(15245, 'pavan3', 'Hyderabad'),(15246,'kamal3', 'Hyderabad'),(15247,'sai Teja3', 'Hyderabad')";


function insertMultipleQury($conn, $insertValue1)
{
    if (mysqli_multi_query($conn, $insertValue1)) {
        // get last id from table
        $last_Id = mysqli_insert_id($conn);

        echo "New record is created successfully. Last id is : " . $last_Id;
    } else {
        echo "Value is not inserted: " . mysqli_error($conn);
    }
}


// fetching data from database
$fetchSql = "SELECT * FROM employee";
$result = mysqli_query($conn, $fetchSql);

function showData($result)
{
    if (mysqli_num_rows($result) > 0) {

        // output data by each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>id: " . $row['empId'];
            echo "<br>empname: " . $row['empname'];
            echo "<br>emploc: " . $row['emploc'] . "<br>";
        }
    }
}

// fetching data based on conditions
$fetchSql1 = "SELECT * FROM employee WHERE empname = 'pavan'";
$result1 = mysqli_query($conn, $fetchSql1);

function showSingleData($result1)
{
    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
            echo "<br>id: " . $row['empId'];
            echo "<br>empname: " . $row['empname'];
            echo "<br>emploc: " . $row['emploc'] . "<br>";
        }
    }
}

// deleting data from database
$deleteSql = "DELETE FROM employee WHERE empname = 'pavan'";

function deleteOrder($conn, $deleteSql)
{
    if (mysqli_query($conn, $deleteSql)) {
        echo "Order is deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


// update data in the database
$updateSql = "UPDATE employee SET empname = 'Meghana' WHERE empId = 15245";

function updateData($conn, $updateSql)
{

    if (mysqli_query($conn, $updateSql)) {
        echo "Record is updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}



mysqli_close($conn);
