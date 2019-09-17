<?php
echo "Hoe veel activiteiten wil je toevoegen?\r\n";
$a = readline();
$b = 1;
$c = array();
while($b <= $a) {
	echo "Wat wil je toevoegen aan jouw bucket list?\r\n";
	$c[] = readline();
	$b++;
}
echo "\r\n\r\n";
echo "Jouw bucketlist:\r\n";
foreach ($c as $item) {
	echo $item."\r\n";
}
?>