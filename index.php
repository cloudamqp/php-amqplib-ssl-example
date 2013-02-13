<?php
require 'vendor/autoload.php';

//If this is enabled you can see AMQP output on the CLI
define('AMQP_DEBUG', true);

use PhpAmqpLib\Connection\AMQPSSLConnection;

$u = parse_url(getenv('CLOUDAMQP_URL'));

$ssl_options = array(
  'capath' => '/etc/ssl/certs',
  'cafile' => './startssl_ca.pem',
  'verify_peer' => true,
);

$conn = new AMQPSSLConnection($u['host'], 5671, $u['user'], $u['pass'], substr($u['path'], 1), $ssl_options);

function shutdown($conn)
{
  $conn->close();
}

register_shutdown_function('shutdown', $conn);

while (true) {}
