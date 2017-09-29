<?php

require __DIR__ . '/../vendor/autoload.php';

$helloWorld = '++++++++[>++++[>++>+++>+++>+<<<<-]>+>+>->>+[<]<-]>>.>---.+++++++..+++.>>.<-.<.+++.------.--------.>>+.>++.';

$program = new Program($helloWorld);
$program->run();
