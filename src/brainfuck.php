<?php

require "./vendor/autoload.php";

$helloWorld = '++++++++[>++++[>++>+++>+++>+<<<<-]>+>+>->>+[<]<-]>>.>---.+++++++..+++.>>.<-.<.+++.------.--------.>>+.>++.';

$program = new Program($helloWorld);
$program->run();
