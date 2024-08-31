<?php
require_once 'vendor/autoload.php';

$GameQ = new \GameQ\GameQ();

$GameQ->addServer([
    'type' => 'csgo',
    'host' => '192.168.178.70:27015'
]);


$GameQ->setOption('timeout', 5);

$results = $GameQ->process();

if (!empty($results)) {
    $server = reset($results); 
    $hostname = ($server['hostname']);
    $map = ($server['map']);
    $num_players = ($server['num_players']);
    $max_players = ($server['max_players']);

    echo "<table border='1'>";
    echo "<tr style='background-color: transparent;'>
            <th>Hostname</th>
            <th>Map</th>
            <th>Players</th>
          </tr>";
    echo "<tr>
            <td>{$hostname}</td>
            <td>{$map}</td>
            <td>{$num_players}/{$max_players}</td>
          </tr>";
    echo "</table>";
} else {
    echo "No Data.";
}
?>
