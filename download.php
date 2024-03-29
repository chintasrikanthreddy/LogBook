<?php
$conn = mysqli_connect("localhost", "root", "", "logregister");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT CourseName,  filename, filesize, filetype, registrationnumber, upload_date FROM files";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploaded files</title>
    <link rel="stylesheet" href="downloadstyle.css">
</head>
<body>
    <img src="banner11.png" class="navs" width="1500px" height="90px">
    <div class="container mt-5 background-box">
        <h2> Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Registration Number</th>
                    <th>CourseName</th>
                    <th>Filename</th>
                    <th>Upload Date</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
                            <td><?php echo $row['registrationnumber']; ?></td>
                            <td><?php echo $row['CourseName']; ?></td>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['upload_date']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="6">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
