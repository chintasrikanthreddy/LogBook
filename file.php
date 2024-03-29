<html>
<head>
    <title>Lab Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="banner11.png" class="navs" width="1500px" height="90px">
    <div class="container">
        <div class="title">Register</div>
        <div class="content">
            <form action="fileconnect.php" method="post" enctype="multipart/form-data">
                <div class="user-details">
                <div class="input-box">
                        <span class="details">Registration Number</span>
                        <input type="text" placeholder="Enter your Number" required name="registrationnumber">
                    </div>
                    <div class="input-box">
                        <span class="details">CourseName</span>
                        <input type="text" placeholder="Enter your CourseName" required name="CourseName">
                    </div>
                    <div class="input-box">
                        <span class="details">Task</span>
                        <input type="file" name="file" id="file">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="End The Lab Session" name="submit">
                </div>
            </form>
</div>
</div>
</body>
</html>
