<?php
var_dump(is_int(101)); // bool(true)
print '<br />';

var_dump(is_int('101')); // bool(false)
print '<br />';

var_dump(is_numeric('101')); // bool(true)
print '<br />';

var_dump(is_float(1.5E8)); // bool(true)
print '<br />';

var_dump(is_resource((fopen('access.log', 'rb')))); // bool(true)
print '<br />';

var_dump(is_null('')); // bool(false)
print '<br />';