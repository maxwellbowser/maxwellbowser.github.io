<!DOCTYPE html>
<html>
<head>
    <title>PHP Webpage</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Hello, <?php echo "World!"; ?></h1>
    
    <p>Todays date is <?php echo date("Y-m-d"); ?></p>
    
    <?php
        // PHP logic for dynamic content
        $user = "John";
        echo "<p>Welcome, $user!</p>";
    ?>
</body>
</html>