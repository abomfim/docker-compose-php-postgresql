<?php
phpinfo();
$envVars = [
  "DB_PORT_5432_TCP_PORT",
  "DB_PORT_5432_TCP_ADDR",
];

foreach ($envVars as $envVar) {
  $envValue = getenv($envVar);
  echo nl2br("<b>{$envVar}</b>: {$envValue}\n");
}
?>
