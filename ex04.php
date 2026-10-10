<?php
$v1 = 42; $v2 = "42"; $v3 = 15.8; $v4 = true; $v5 = false; $v6 = null;

echo "<pre>";
var_dump($v1, $v2, $v3, $v4, $v5, $v6);
echo "</pre>";

echo "15.8 en int: " . (int)15.8 . "<br>";
echo "true avec echo: $v4 <br>";
echo "false avec echo: $v5 <br>";

echo "<pre>";
var_dump((bool)0, (bool)"0", (bool)"PHP", (bool)[]);
echo "</pre>";
?>