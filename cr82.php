<?php
include('db.php');

// sql to create table
$sql = "CREATE TABLE tracking (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
senders_name VARCHAR(60) NOT NULL,
receivers_name VARCHAR(60) NOT NULL,
receivers_address VARCHAR(60) NOT NULL,
receivers_email VARCHAR(60) NOT NULL,
receivers_phone VARCHAR(60) NOT NULL,
dp VARCHAR(255) NOT NULL,
shipping_date VARCHAR(60) NOT NULL,
delivery_date VARCHAR(60) NOT NULL,
delivery_time INT(3) NOT NULL,
cargo_description VARCHAR(60) NOT NULL,
weight VARCHAR(60) NOT NULL,
route1 VARCHAR(60) NOT NULL,
route2 VARCHAR(60) NOT NULL,
route3 VARCHAR(60) NOT NULL,
route4 VARCHAR(60) NOT NULL,
route1_text VARCHAR(60) NOT NULL,
route2_text VARCHAR(60) NOT NULL,
route3_text VARCHAR(60) NOT NULL,
route4_text VARCHAR(60) NOT NULL,
route1_date DATETIME NOT NULL,
route2_date DATETIME NOT NULL,
route3_date DATETIME NOT NULL,
route4_date DATETIME NOT NULL,
status VARCHAR(60) NOT NULL,
trackingid VARCHAR(60) NOT NULL, 
reg_dateauto TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
/*try {
    $dbh = new PDO('mysql:host=localhost;dbname=ddxlogis_001', 'ddxlogis_001', 'An0therrichard3303');
    
  echo 'connected';

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}*/
?> 