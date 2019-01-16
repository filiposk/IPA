<?php
$variable = "content";

echo $variable;

$message= "
<hr />
php
akademija
<hr />
";

echo $message;

$message = <<<IPA
<h1 title = "Main title">
    Inchoo PHP Academy
</h1>
IPA;

echo $message;

echo "Use $variable inside echo #1 <hr />";
echo "Use " . $variable . "inside echo #2<hr />";

echo "abc{$variable}def";

echo 'abc{$variable}def';
echo "abc$variabledef";

echo gettype($variable);
echo "<hr>";

$variable = 2;

echo  gettype($variable);
echo "<hr>";

$variable = 2.1;
echo  gettype($variable);
echo "<hr>";

$variable = true;
echo  gettype($variable);
echo "<hr>";

$variable =[];
echo  gettype($variable);
echo "<hr>";

$variable = new stdClass();
echo  gettype($variable);
echo "<hr>";

$variable = null;
echo  gettype($variable);
echo "<hr>";

$variable=2.1;
var_dump($variable);
echo  "<hr />";
print_r($variable);
echo  "<hr />";

$variable= 2;
echo $variable;
echo "<hr>";
$variable = "Osijek";
echo $variable;
echo "<hr>";