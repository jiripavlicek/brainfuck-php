<?php

class DecrementRegisterCommand extends AbstractCommand {

    public function run()
    {
        $this->registry->decrement();
        return 1;
    }
}