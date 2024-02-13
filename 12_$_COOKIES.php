<?php

/*
 * COOKIES - mechanism for storing data in the remote browser and thus tracking or identifying returning users.
 *  You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
 *
 * How to set cookie
 * setcookie(nameAttribute, nameAttributeValue, expirationTime + 86400 seconds ) ; // 86400 seconds = 1 day
 *
 * How to check cookie in browser?
 * Google Chrome: F12 -> Application -> Cookies -> website's URL
 * Microsoft Edge: Alt + F -> More Tools -> Developer Tools (Crl + Shift + I) -> Application with the dialog pane icon
 *  -> Cookies - website's URL
 */

// Setting a cookie
setcookie('name', 'Emerald', time() + 5000);

// Checking existence of cookie
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name']; // Emerald
}

// Deleting a cookie
setcookie('name', '', time() - 86400); // It will unset it since we change the value into empty



