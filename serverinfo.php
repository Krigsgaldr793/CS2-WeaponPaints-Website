<?php
require_once 'vendor/autoload.php';

$GameQ = new \GameQ\GameQ();

// Array of Servers, change to your IP and Port
$servers = [
    '192.168.178.70:27015',
    '192.168.178.70:27017',
    '192.168.178.70:27018',
    '192.168.178.70:27019',
    '192.168.178.70:27016',
    '192.168.178.70:27020',
    '192.168.178.70:27024'
];

foreach ($servers as $server) {
    $GameQ->addServer([
        'type' => 'csgo',
        'host' => $server
    ]);
}

$GameQ->setOption('timeout', 5);

$results = $GameQ->process();

if (!empty($results)) {
    echo "<table border='1'>";
    echo "<tr style='background-color: transparent;'>
            <th>Hostname</th>
            <th>Map</th>
            <th>Players</th>
            <th></th>
          </tr>";

    $i = 0;
    foreach ($results as $server) {
        $hostname = ($server['hostname']);
        $map = ($server['map']);
        $num_players = ($server['num_players']);
        $max_players = ($server['max_players']);

        echo "<tr>
                <td>{$hostname}</td>
                <td>{$map}</td>
                <td>{$num_players}/{$max_players}</td>
                <td><a href='steam://connect/{$servers[$i]}'><button style='background-color: transparent; border: none; padding: 0;'><span>Connect</span></button></a></td>
              </tr>";
        $i++;
    }

    echo "</table>";
} else {
    echo "No Data.";
}
?>