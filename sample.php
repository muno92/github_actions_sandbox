<?php

echo ini_get('error_log') . PHP_EOL;

echo 'from echo' . PHP_EOL;

error_log('from error_log');
