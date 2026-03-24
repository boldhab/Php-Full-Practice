<?php
// cookie
// cookie is a small piece of data that is stored on the client's computer by the web browser. 
// It is used to remember information about the user, such as their preferences, login status, and other data that can be used to personalize their experience on the website.

// setcookie() function is used to set a cookie in PHP.
// Syntax: setcookie(name, value, expire, path, domain, secure, httponly);
// Example: Set a cookie named "username" with the value "John Doe" that expires in 1 hour
setcookie("username", "John Doe", time() + 3600);
// To retrieve the value of a cookie, you can use the $_COOKIE superglobal array.
// Example: Retrieve the value of the "username" cookie
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set.";
}
?>