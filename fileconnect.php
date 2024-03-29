<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["CourseName"]) && isset($_POST["registrationnumber"]) && isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = array("doc", "pdf", "txt");
        
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only doc, txt, and PDF files are allowed.";
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $courseName = $_POST['CourseName'];
                $registrationNumber = $_POST['registrationnumber'];
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];
                
                // Establish database connection
                $conn = new mysqli("localhost", "root", "", "logregister");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                // Use prepared statement to prevent SQL injection
                $sql = "INSERT INTO files (CourseName, registrationnumber, filename, filesize, filetype) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssis", $courseName, $registrationNumber, $filename, $filesize, $filetype);
                
                if ($stmt->execute()) {
                    header("Location: submit.html");
                    exit(); // Ensure script execution stops after redirection
                } else {
                    echo "There was an error: " . $conn->error;
                }
                
                // Close statement and connection
                $stmt->close();
                $conn->close();
            } else {
                echo "There was an error uploading the file.";
            }
        }
    } else {
        echo "Please provide Course Name, Registration Number, and a file to upload.";
    }
}
?>
