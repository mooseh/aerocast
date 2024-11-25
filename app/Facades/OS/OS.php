<?php

namespace App\Facades\OS;

use Illuminate\Support\Facades\Process;

class OS
{
    protected $os;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->os = $this->detect();
    }

    public function detect()
    {
        return strtolower(PHP_OS);
    }

    public function hasProgram($program)
    {

        switch ($this->os) {
            case 'windows':
                //@todo needs windows command to check a program exists
                return $process = Process::run(["whereis", $program])->successful();
                break;

            default:
                return $process = Process::run(["whereis", $program])->successful();
                break;
        }
    }
}
