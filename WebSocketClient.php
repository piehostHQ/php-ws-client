<?php

require dirname(__FILE__) . '/vendor/autoload.php';

use WebSocket\Client;

try {
    // Replace 'your-channel-id', 'your-api-key', and 'your-api-endpoint' with your PieSocket details
    $channelId = "2";
    $clusterId = "free.blr2";
    $apiKey = "B9UKgvptNTWrZxfCUTquFp7nKVsYqu2LtmBao5Jg";
    $endpoint = "wss://$clusterId.piesocket.com/v3/$channelId?api_key=$apiKey&notify_self";

    // Connect to the PieSocket WebSocket server
    $client = new Client($endpoint);

    // Send a message to the server
    $client->send("Hello PieSocket Server!");

    // Receive a response from the server
    $response = $client->receive();

    echo "Response from server: $response\n";
    
    // Close the connection
    $client->close();
} catch (Exception $e) {
    echo "Could not connect to PieSocket server: ", $e->getMessage(), "\n";
}
