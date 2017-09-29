<?php

class RegistryTest extends PHPUnit_Framework_TestCase
{

    protected $registry;

    protected function setUp()
    {
        $this->registry = new \Registry();
    }

    public function testCanCreateInstance()
    {
        $this->assertInstanceOf('Registry', $this->registry);
    }

    public function testIncrementPointer()
    {
        $this->registry->incrementPointer();
        $this->assertSame(1, $this->registry->getPointer());
        $this->registry->incrementPointer();
        $this->assertSame(2, $this->registry->getPointer());
        $this->registry->incrementPointer();
        $this->assertSame(3, $this->registry->getPointer());
    }

    public function testDecrementPointer()
    {
        $this->registry->decrementPointer();
        $this->assertSame(-1, $this->registry->getPointer());
        $this->registry->decrementPointer();
        $this->assertSame(-2, $this->registry->getPointer());
        $this->registry->decrementPointer();
        $this->assertSame(-3, $this->registry->getPointer());
    }

    public function testIncrementAndDecrementPointer()
    {
        $this->registry->incrementPointer();
        $this->assertSame(1, $this->registry->getPointer());
        $this->registry->decrementPointer();
        $this->assertSame(0, $this->registry->getPointer());
        $this->registry->decrementPointer();
        $this->assertSame(-1, $this->registry->getPointer());
    }

    public function testGetByIndexDefaultValues()
    {
        $this->assertSame(0, $this->registry->getByIndex(0));
        $this->assertSame(0, $this->registry->getByIndex(1));
        $this->assertSame(0, $this->registry->getByIndex(3));
    }

    public function testSetByIndexGetByIndex()
    {
        $this->registry->setByIndex(0, 1);
        $this->assertSame(1, $this->registry->getByIndex(0));
        $this->registry->setByIndex(1, 5);
        $this->assertSame(5, $this->registry->getByIndex(1));
    }

    public function testIncrement()
    {
        $this->registry->increment();
        $this->assertSame(1, $this->registry->getByIndex(0));
        $this->registry->increment();
        $this->assertSame(2, $this->registry->getByIndex(0));
        $this->registry->incrementPointer();
        $this->registry->increment();
        $this->registry->increment();
        $this->registry->increment();
        $this->assertSame(3, $this->registry->getByIndex(1));
    }

    public function testDecrement()
    {
        $this->registry->setByIndex(0, 3);
        $this->registry->decrement();
        $this->assertSame(2, $this->registry->getByIndex(0));
        $this->registry->decrement();
        $this->assertSame(1, $this->registry->getByIndex(0));
        $this->registry->setByIndex(1, 5);
        $this->registry->incrementPointer();
        $this->assertSame(5, $this->registry->getByIndex(1));
        $this->registry->decrement();
        $this->assertSame(4, $this->registry->getByIndex(1));
        $this->registry->decrement();
        $this->assertSame(3, $this->registry->getByIndex(1));
        $this->registry->decrement();
        $this->assertSame(2, $this->registry->getByIndex(1));
    }
}
