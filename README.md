# PHP Cookie Manager

## Overview
The PHP Cookie Manager is a simple and effective class for managing cookies in PHP applications. This class provides static methods to set, get, delete, and list cookies easily, allowing for straightforward cookie management without the need for instantiation.

## Installation
To use the PHP Cookie Manager in your project, simply include the `Cookie.php` file in your project. You can also install it via Composer.

```bash
composer require natilosir/cookie
```

## Usage
### Setting a Cookie
To set a cookie, use the set method. You can specify the cookie name, value, and expiration time in days.

```php
use natilosir\cookie\Cookie;

// Set a cookie
Cookie::set('username', 'JohnDoe', 7); // Expires in 7 days
```
### Getting a Cookie
To retrieve the value of a cookie, use the get method.

```php
// Get the cookie value
$username = Cookie::get('username');
echo 'Username: ' . $username; // Outputs: Username: JohnDoe
```

### Deleting a Cookie
To delete a cookie, use the delete method.

```php
// Delete the cookie
Cookie::delete('username');
```
### Listing All Cookies
To list all cookies available in the current session, use the list method.

```php
// List all cookies
$allCookies = Cookie::list();
print_r($allCookies); // Outputs all cookies
```
## Methods
### `set($name, $value, $days = 0)`
Sets a cookie with the specified name and value. If $days is greater than 0, the cookie will expire after the specified number of days.

### `get($name)`
Retrieves the value of the cookie with the specified name. Returns null if the cookie does not exist.

### `delete($name)`
Deletes the cookie with the specified name by setting its expiration date to a time in the past.

### `list()`
Returns an associative array of all cookies currently available in the $_COOKIE superglobal.

## Example
Here is a complete example demonstrating how to use the PHP Cookie Manager:

```php
use natilosir\cookie\Cookie;

// Set a cookie
Cookie::set('username', 'JohnDoe', 7);

// Get the cookie value
$username = Cookie::get('username');
echo 'Username: ' . $username; // Outputs: Username: JohnDoe

// Delete the cookie
Cookie::delete('username');

// List all cookies
$allCookies = Cookie::list();
print_r($allCookies); // Outputs all cookies
```
