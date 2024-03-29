<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
    body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg, #FF8000, #71b7e6, #FFFFFF);
}
.container {
    margin: 0 auto;
    max-width: 800px;
    padding: 20px;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
table {
    width: 100%;
    border-collapse: collapse;
}
th {
    background-color: #71b7e6;
    color: #fff;
    text-align: left;
    padding: 10px;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
td {
    padding: 10px;
}
.btn {
    padding: 8px 12px;
    border: none;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn:hover {
    background-color: #0056b3;
}
  .navs{
position:absolute;
top:0px;
  }
        </style>
<title>Search Results</title>
</head>
<body>
<img src="banner11.png" class="navs" width="1500px" height="90px">
    <?php
    if(isset($_POST["submit"])) 
    {
        $registrationNumber = $_POST["RegistrationNumber"];
        $courseName = $_POST["CourseName"];
        $conn = mysqli_connect("localhost", "root", "", "logregister");
        if (!$conn) 
        {
            die("Connection failed:" . mysqli_connect_error());
        }
        $sql = "SELECT * FROM registration WHERE RegistrationNumber = '$registrationNumber' AND CourseName = '$courseName'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Registration Number</th><th>Name</th><th>Course Name</th><th>System Number</th><th>Intime</th><th>Outtime</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["RegistrationNumber"] . "</td>";
                echo "<td>" . $row["StudentName"] . "</td>";
                echo "<td>" . $row["CourseName"] . "</td>";
                echo "<td>" . $row["SystemNumber"] . "</td>";
                echo "<td>" . $row["Intime"] . "</td>";
                echo "<td>" . $row["Outtime"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } 
        else 
        {
            echo "No records found for the provided registration number and course name.";
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>
