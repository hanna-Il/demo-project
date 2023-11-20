<?php

declare(strict_types=1);
$elephants = [
    'Babar', 'Dumbo', 'Ella', 'Elmer', 'Emily'
];

$elephants = array_filter(
    array_map(
        function (string $name) : string
        {
            return strtoupper( $name );
        },
        $elephants
    ),
    function( string $name ) : bool
    {
        return str_contains($name, 'M');
    }
);

echo join(', ', $elephants), "\n";
