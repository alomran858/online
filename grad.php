<?php
$address = '5.245.238.92';
$port = 4309;

$socket = socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
socket_connect($socket, $address, $port);

$message = "Apple\n";
$len = strlen($message);

$status = socket_sendto($socket, $message, $len, 0, $address, $port);
if($status !== FALSE)
{
    $message = '';
    $next = '';
    while ($next = socket_read($socket, 4096))
    {
        $message .= $next;
    }

    echo $message;
}
else
{
    echo "Failed";
}

socket_close($socket);
?>
