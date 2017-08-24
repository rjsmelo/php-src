--TEST--
readline_read_history(): Basic test
--SKIPIF--
<?php if (!extension_loaded("readline") || !function_exists('readline_write_history')) die("skip"); ?>
--INI--
open_basedir=/tmp/some-sandbox
--FILE--
<?php

$name = '/tmp/out-of-sandbox';

var_dump(readline_write_history($name));

var_dump(readline_read_history($name));

?>
--EXPECTF--
Warning: readline_write_history(): open_basedir restriction in effect. File(/tmp/out-of-sandbox) is not within the allowed path(s): (/tmp/some-sandbox) in %s on line %d
bool(false)

Warning: readline_read_history(): open_basedir restriction in effect. File(/tmp/out-of-sandbox) is not within the allowed path(s): (/tmp/some-sandbox) in %s on line %d
bool(false)