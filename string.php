<?php
//string
$s1 = "string";
$s2 = 'string';
$s3 = <<<MULTILINE
Some
long
text
with "str"
'dsada'
$s1
\$s1
MULTILINE;

echo "<pre> $s3 </pre>";

$s4 = <<<'MULTILINE2'
Some
long
text
with "str"
'dsada'
$s1
\$s1
MULTILINE2;
echo "<pre> $s4 </pre>";

echo "<br><hr>";
echo mb_strlen("string");
echo "<br>";
echo mb_strlen("рядок");
echo "<br>";
echo mb_substr("рядок", 2, 3);
echo "<br>";
echo mb_strtoupper("Текст");
