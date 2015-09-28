<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2015-09-24
 * Time: 22:27
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once 'auth.php';

$config = array(
  "base_url"  => "http://auth.dev/hybrid.php",
  "providers" => array(
    "Google" => array(
      "enabled"         => true,
      "keys"            => array( "id" => $keys['id'], "secret" => $keys['secret'] ),
      "scope"           => "https://www.googleapis.com/auth/userinfo.profile " . // optional
                           "https://www.googleapis.com/auth/userinfo.email", // optional
      "access_type"     => "offline",   // optional
      "approval_prompt" => "force",     // optional
      "hd"              => $domain // optional
    )
  )
);

$auth = new Hybrid_Auth( $config );

/** @var Hybrid_Provider_Adapter $adapter */
$adapter = $auth->authenticate( "Google" );

var_dump($adapter);
//$user_profile = $adapter->getUserProfile();

var_dump($adapter->adapter->getUserProfile());