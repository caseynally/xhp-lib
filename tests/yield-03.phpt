--TEST--
PHP5.5 Yield keyword 03
--FILE--
<?php
function yieldTest() {
  $a = yield;
  echo $a;
}
$b = yieldTest();
$b->send(1);
--EXPECT--
1