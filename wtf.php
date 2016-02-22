<?php
passthru("clear");
passthru("figlet -f lean PHPWTF | tr ' _/' ' //'");
print "==================================================================\n";
print "Compare the following values:\n";
function print_equal($a, $b) {
  print "Is " . var_export($a, TRUE) . " == " . var_export($b, TRUE) . "? " . ($a == $b ? "Yes!" : "No.") . "\n";
}
$a = "15";
$b = "0xF";
print_equal($a, $b);

print "==================================================================\n";
$a = array("foo" => 123, "bar" => 456);
$b = array("foo" => 456, "bar" => 123);
print "Let's compare those two arrays: \$a=" . var_export($a, TRUE) . ", \$b=" . var_export($b, TRUE) . "\n";
print "Show us the difference: array_diff(\$a, \$b) = " . var_export(array_diff($a, $b), TRUE) . "\n";

print "==================================================================\n";
$a = array('7.1');
print "Let's have a look at this little gem: " . var_export($a, TRUE) . "\n";
print "Now, is '7.10' in it? " . (in_array('7.10', $a) ? "Yes!" : "No.") . "\n";

print "==================================================================\n";
print "Some version_compare\n";
function compare_test($a, $b) {
  print "'$a' vs. '$b': " . version_compare($a, $b)."\n";
}
compare_test('anaconda', 'acromantula');
compare_test('baby', 'blister');
compare_test('change', 'cloister');
compare_test('deviant', 'defines');
compare_test('anaconda', 'blister');
compare_test('baby', 'defines');
compare_test('cloister', 'defines');
compare_test('places', 'races');

print "==================================================================\n";
print "Some more compares!\n";
print_equal(FALSE, 0);
print_equal(0, 'x');
print_equal('x', TRUE);
print_equal(TRUE, 'x');

print "==================================================================\n";
print "Let's switch \$a = 0:!\n";
$a = 0;
switch( $a ) {
  case 'test':
    echo "It is 'test'!\n";
    break;
  case 0:
    echo "It is 0\n";
    break;
  default:
    echo "It is nothing at all\n";
    break;
}

print "==================================================================\n";
print "Some character increasing, loop from 'a' to 'z'\n";
for ($i = 'a'; $i <= 'z'; $i++) print "$i ";
print "\n";

print "==================================================================\n";
print "After all we learned, is 'aa' smaller than 'b'? " . ('aa' < 'b' ? "Yes!" : "No.") . "\n";
?>
