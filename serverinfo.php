<?php
require_once 'vendor/autoload.php';
require_once 'config.php'; // Including the config.php to get $server variable 

$GameQ = new \GameQ\GameQ();

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