<?php
echo "<h1>This is PHP Class</h1>";
echo "We're members of section KM041!<br>";
echo "We're ", "members ", "of ", "section ", "KM041!<br>";

print "<h4><i>This is PHP Class</i></h4>";
print "We're members of section KMO41!<br>";

print "<marquee>This is the use of marquee tag</marquee>";

/*this is multi-line comment*/

$one = "Hello";
$two = "World";
echo $one, $two;
// echo $one$two; error

echo $one.$two;
echo "$one$two";
echo "$one"."$two";

// print ($one,$two); error
print $one.$two;
// print $one$two; error
print "$one$two";
print "$one"."$two";
?>