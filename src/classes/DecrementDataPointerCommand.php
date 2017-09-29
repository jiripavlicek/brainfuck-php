<?php

class DecrementDataPointerCommand extends AbstractCommand {
    
public function run()
    {
        $this->registry->decrementPointer();
        return 1;
    }
}