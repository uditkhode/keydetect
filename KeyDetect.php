<?php
if(isset($_POST['submit']))
{
    $unknown=$_POST['unknown'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Key Page</title>
</head>
<body>
     <form action="KeyDetectProcess.php" method="post">
     PRESS ANY KEY
     <input type="text" name="unknown" id="unknown">
     <input type="submit" name="submit" value="Check">
    
     </form>
</body>
</html>