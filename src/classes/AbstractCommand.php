<?php

class AbstractCommand {

    protected $registry;
    protected $program;
    protected $programCounter;
    protected $output;
    
    public function __construct($registry, $program, $programCounter)
    {
        $this->registry = $registry;
        $this->program = $program;
        $this->programCounter = $programCounter;
        $this->output = '';
    }

    public function run()
    {
        return 1;
    }

    public function getOutput()
    {
        return $this->output;
    }
}