<?php
if(isset($_POST['submit']))
{
    $unknown=$_POST['unknown'];
}
?>
<style>
    *
    {
        margin: 0;
        padding: 0;
    }
.parent {
    position: relative;
    height: 100vh; /* Optional, for full viewport height */
    background-color: blue;
}
.child {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50%; /* Optional, define as needed */
    background-color: red;
    text-align: center;
}
input[type="text"]
{
    height: 30px;
    width: 250px;
    display: block;
    margin: 21px auto;
    transition: width 0.4s ease-in-out;
}
input[type="text"]:focus
{
    width: 400px;
}
input[type="submit"]
{
    margin: 16px auto;
    width: 31%;
    height: 31px;
    font-size: 18px;
    color: brown;
    box-shadow: 1px 1px 3px blue;
}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Key Page</title>
</head>
<body>
    <div class="parent">

            <form class="child" action="KeyDetectProcess.php" method="post">
            <h2> 
                PRESS ANY KEY

            </h2>
            <input type="text" name="unknown" id="unknown">
            <input type="submit" name="submit" value="Check">
    </div>
    
     </form>
</body>
</html>