<?php

$command = $argv[1] ?? null;

switch ($command) {
    case 'serve':
        passthru('php -S localhost:8000 -t public');
        break;

    case 'phpstan':
        passthru('vendor\\bin\\phpstan analyse');
        break;

    case 'phpcs':
        passthru('vendor\\bin\\phpcs');
        break;

    case 'deptrac':
        passthru('vendor\\bin\\deptrac analyse');
        break;

    default:
        echo "Commands: serve | phpstan | phpcs | deptrac\n";
}

