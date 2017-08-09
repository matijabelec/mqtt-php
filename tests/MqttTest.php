<?php

use MatijaBelec\Mqtt\Mqtt;

class MqttTest extends PHPUnit_Framework_TestCase {
  public function testMqttIsConnected()
  {
    $mqtt = new Mqtt;
    $this->assertNotTrue($mqtt->isConnected());
  }
}
