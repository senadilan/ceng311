<?php
// Activity6.php
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="activity.css">
    <title>Registration Form</title>

</head>
<body>
    <h2>Registration Form</h2>
    <div class="form-container">

    <form action="activity-preview.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>
        
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="America">America</option>
            <option value="Canada">Canada</option>
            <option value="UK">UK</option>
        </select><br>
        
        <label for="zip">ZIP Code:</label>
        <input type="text" id="zip" name="zip"><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        
        <label>Sex:</label>
        <input type="radio" name="sex" value="Male"> Male
        <input type="radio" name="sex" value="Female"> Female<br>
        
        <label>Language:</label>
        English<input type="checkbox" name="language[]" value="English">
        French<input type="checkbox" name="language[]" value="French"> 
        German<input type="checkbox" name="language[]" value="German"> <br>
        
        <label for="about">About:</label>
        <textarea id="about" name="about"></textarea><br>
        
        <input id="submit-button" type="submit" value="Submit">
    </form>
    </div>

</body>
</html>

