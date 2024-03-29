<!DOCTYPE html>
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
            <form action="connect.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Student Name</span>
                        <input type="text" placeholder="Enter your name" required name="StudentName">
                    </div>
                    <div class="input-box">
                        <span class="details">Registration Number</span>
                        <input type="text" placeholder="Enter your Number" required name="RegistrationNumber">
                    </div>
                    <div class="input-box">
                        <span class="details">Course Name</span>
                        <input type="text" placeholder="Enter Course Name" required name="CourseName">
                    </div>
                    <div class="input-box">
                        <span class="details">System Number</span>
                        <input type="text" placeholder=" Enter System Number " required name="System">
                    </div>
                    <div class="input-box">
                        <span class="details">Out-Time</span>
                        <input type="text" required name="Outtime" placeholder="HH:MM:SS">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Start The Lab Session" name="submit">
                </div>
            </form>
            <div class="input-box">
                <span class="details">Are you a teacher?</span>
                <a href="teacherlogin.html">Click Here</a>
            </div>
        </div>
    </div>
</body>
</html>
