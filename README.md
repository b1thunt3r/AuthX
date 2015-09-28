# Auth
Testing out Hybrid Auth for login to Google Apps Domain

## Info
- [HybridAuth - Google Authentication](http://hybridauth.sourceforge.net/userguide/IDProvider_info_Google.html)
- Make sure to have Contacts and Google+ API access enabled in [https://console.developers.google.com/project](https://console.developers.google.com/project).
- And also make sure to have `Authorized redirect URIs` right.

## auth.php
I decided to put my domain and google secret in auth.php. Below is the structure of auth.php
```php
// google "Client ID" and "Client Secret"
$keys = [
  'id' => "PUT_YOURS_HERE",
  'secret' => "PUT_YOURS_HERE"
];

// if you want to force user to one specific domain.
$domain = "PUT_YOURS_HERE";
```