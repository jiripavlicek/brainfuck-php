<?php

class ProgramTest extends PHPUnit_Framework_TestCase
{

    protected $program;

    protected function setUp()
    {
    }

    public function testCanCreateInstance()
    {
        $this->program = new \Program('');
        $this->assertInstanceOf('Program', $this->program);
    }

    public function testDecodeCommandClass()
    {
        $this->program = new \Program('');
        $this->assertSame('IncrementDataPointerCommand', $this->program->decodeCommandClass('>'));
        $this->assertSame('UnknownCommand', $this->program->decodeCommandClass(''));
        $this->assertSame('UnknownCommand', $this->program->decodeCommandClass('a'));
    }
}
