<?php
namespace Wellspring\Repositories;

use Wellspring\Models\Run;

class Runs
{
    private $runs = [];

    public function addRun(Run $run)
    {
        $this->runs[$run->number] = $run;
    }

    public function getAll()
    {
        ksort($this->runs);
        return $this->runs;
    }
}
