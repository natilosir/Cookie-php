<?php

namespace natilosir\cookie;

class cookie
{
    // Set a cookie
    public static function set($name, $value, $days = 1)
    {
        if ($days > 0) {
            $expire = time() + ($days * 24 * 60 * 60); // Convert days to seconds
            setcookie($name, $value, $expire, '/'); // Set the cookie
        } else {
            setcookie($name, $value, 0, '/'); // Session cookie
        }
    }

    // Get a cookie value
    public static function get($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null; // Return the cookie value or null
    }

    // Delete a cookie
    public static function delete($name)
    {
        setcookie($name, '', time() - 3600, '/'); // Set the cookie to expire
    }

    // List all cookies
    public static function list()
    {
        return $_COOKIE; // Return all cookies
    }
}
