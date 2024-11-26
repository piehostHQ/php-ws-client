# WebSocket PHP Client Example

This project demonstrates how to use connect to a WebSocket server from PHP active as a client.

---

## Features

- Connects to a PieSocket WebSocket channel.
- Sends a message to the server.
- Receives and displays the server's response.

---

## Prerequisites

Before you start, ensure you have the following:

1. **PHP 7.4+** installed.
2. **Composer** installed for dependency management.
3. A valid PieSocket account to get your API key, cluster ID, and channel ID.

---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/piesocket-php-client-example.git
   cd piesocket-php-client-example
   
Install dependencies using Composer:
   ```bash
   composer install
   ```
Usage
Replace the placeholders in the script (index.php) with your PieSocket credentials:

```php
$channelId = "your-channel-id";
$clusterId = "your-cluster-id";
$apiKey = "your-api-key";
```
Run the script:
```bash
php webSocketClient.php
```
Observe the server's response in the console.

Example Output
```bash
Response from server: Hello from PieSocket!
