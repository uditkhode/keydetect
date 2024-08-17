<?php
if(isset($_POST['submit']))
{

    $unknown=$_POST['unknown'];

    if(is_numeric($unknown))
    {
        echo $unknown." this is numeric";
    }
    elseif(ctype_alpha($unknown))
    {
        echo $unknown." this is Alphabate";
    }
    elseif(ctype_alnum($unknown))
    {
        echo $unknown." this is Alpha_numeric";
    }
    else
    {
        echo $unknown." this is a special Character";
    }
}

?>