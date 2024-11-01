<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Quam maiores perspiciatis, facilis saepe tempora nobis quis deserunt voluptates nesciunt eaque libero officiis, vel rem voluptatum illo soluta culpa dolor doloremque?
Maxime, voluptate! Mollitia cumque itaque odit excepturi error corrupti reprehenderit est commodi, modi beatae deleniti aliquid non, 
natus laborum ea voluptatibus sequi eligendi nostrum maiores incidunt illum. Commodi, illo vitae?";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang karakter: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>