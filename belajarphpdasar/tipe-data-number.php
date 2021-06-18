<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111111);

echo "Underscore in number : ";
var_dump(1_234_123_123);

echo "Floating Point :";
var_dump(1.234);

echo "Floating Point with E notation Plus (1.7 x 1000) :";
var_dump(1.7e3);

echo "Floating Point with E notation Minus (1.7 x 0.001) :";
var_dump(1.7e-3);

echo "Underscore Floating Point :";
var_dump(1_234.567);

echo "Integer Overflow 64 bit :";
var_dump(9223372036854775808);
?>