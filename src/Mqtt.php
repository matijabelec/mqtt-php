<?php

namespace MatijaBelec\Mqtt;

class Mqtt {
  private $connection;

  public function __construct()
  {
    $this->connection = false;
  }

  public function connect($options)
  {
    $this->connection = true;
  }

  public function disconnect()
  {
    $this->connection = false;
  }

  public function subscribe($topic)
  {

  }

  public function unsubscribe($topic)
  {

  }

  public function publish($topic, $payload)
  {

  }

  public function isConnected()
  {
    return $this->connection !== false;
  }
}
