<?php 
$sql = "SELECT * FROM users";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nytt_test";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);


$login_success = false;
$full_name = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if($row["userid"] == $_POST["username"] &&
					$row["passwd"] == $_POST["password"]) {
			$login_success = true;
			$full_name = $row["firstname"] . " " .
					$row["lastname"];
			}
	}
} else {
    echo "0 results";
}
$conn->close();

if ($login_success == true){
    echo "login success";
}
else {
    echo "login failed";   
}


?>