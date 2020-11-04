<?php namespace App\Libraries;

use \OAuth2\Storage\Pdo;

class OAuth2 {
  var $server;

  function __constructor() {
    $this->init();
  }

  public init() {
    $dsn = getenv('database.default.DSN');
    $username = getenv('database.default.username');
    $password = getenv('database.default.password');

    $storegae = new Pdo(['dsn' => $dsn, 'username' => $username, 'password' => $password]);
    $this->server = new \OAuth2\Server($storage);
    $this->server->addGrantType(new \OAuth2\GrantType\UserCredentials($storage));
  }
}