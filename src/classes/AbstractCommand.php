<?php

class AbstractCommand {

    protected $registry;
    protected $program;
    protected $programCounter;
    protected $output;

    /**
     * AbstractCommand constructor.
     * @param $registry
     * @param string $program
     * @param int $programCounter
     */
    public function __construct($registry, string $program, int $programCounter)
    {
        $this->registry = $registry;
        $this->program = $program;
        $this->programCounter = $programCounter;
        $this->output = '';
    }

    /**
     * @return int
     */
    public function run() : int
    {
        return 1;
    }

    /**
     * @return string
     */
    public function getOutput() : string
    {
        return $this->output;
    }
}