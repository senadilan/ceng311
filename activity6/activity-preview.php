
<html>
<head>
    <title>Form Submission Preview</title>
    <link rel="stylesheet" href="activity.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Form Submission Preview</h1>";
    
    $fields = ['name', 'username', 'password', 'address', 'country', 'zip', 'email', 'sex', 'about'];
    
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            echo ucfirst($field) . ": is not provided.<br>";
        } else {
            echo htmlspecialchars($_POST[$field]) . "<br>";
        }
    }
    
    if (!empty($_POST['language'])) {
        echo implode("<br>", $_POST['language']);
    } else {
        echo "Languages: Not provided<br>";
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>
</body>
</html>
