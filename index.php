
<html>
<body>

<?php 

    if (!isset($_COOKIE['count']))// check if the cookie is created
    {
        $cookie = 1; // cookie variable
        setcookie("count", $cookie); // create the cookie
    }
    else
    {
        $cookie = ++$_COOKIE['count']; // increase the cookie
        setcookie("count", $cookie);// update the cookie
	}
	echo "Number of views:".$cookie; // print the value 
?> 

</body>
</html>