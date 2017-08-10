<?php

use MatijaBelec\Mqtt\Mqtt;

class MqttTest extends PHPUnit_Framework_TestCase {
  public function testMqttConnectAndDisconnect()
  {
    $mqtt = new Mqtt;
    $options = array(
      'host' => 'localhost',
      'port' => 9001,
    );
    $mqtt->connect($options);
    $this->assertTrue($mqtt->isConnected(), 'Connection not established');
    $mqtt->disconnect();
    $this->assertNotTrue($mqtt->isConnected(), 'Disconnect failed');
  }
}
