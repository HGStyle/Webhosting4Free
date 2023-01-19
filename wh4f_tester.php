<?php
echo "Hello !<br>";
echo "This is the Webhosting4Free project.<br>";
echo "Testing this host...<br>";

// Test the server
$curl_h = curl_init('https://webhosting4freeetester.hgstyleofficial.repl.co/');
curl_setopt($curl_h, CURLOPT_HTTPHEADER,
    array(
        'url: ' . $_SERVER['REQUEST_URI'],
    )
);
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
$r = curl_exec($curl_h);
curl_close($curl_h);
if ($r == "-1") {
    echo "Error";
} elseif ($r == "0") {
    echo "This host uses Javascript Redirects !";
} else {
    echo "This host does not uses any Javascript Redirects !";
}
?>
