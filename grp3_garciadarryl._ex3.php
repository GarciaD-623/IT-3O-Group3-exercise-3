<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type= "text/css" href="StyleSheet1.css">
    <title>comment page</title>
</head>
<body>
<h2>Write here</h2>
<main>
<form action = "process.php" method = "post"> 

<textarea rows="30" cols="50" name="comment" value="1"> 
<?php echo $current; ?>
</textarea>



<input type="Submit">
</form>

<?php include('condition.php');
?>
</main>
</body>
</html>
