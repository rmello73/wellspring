<?php
namespace Wellspring\Repositories;

use Wellspring\Models\Run;
use PHPUnit\Framework\TestCase;

class RunTest extends TestCase
{
    public $repo;
   
    public function setUp() : void
    {
        $this->repo = new Runs;
        $this->repo->addRun(new Run('line4', 'route4', 'run4', 'operator4'));
        $this->repo->addRun(new Run('line2', 'route2', 'run2', 'operator2'));
        $this->repo->addRun(new Run('line1', 'route1', 'run1', 'operator1'));
        $this->repo->addRun(new Run('line3', 'route3', 'run3', 'operator3'));
        $this->repo->addRun(new Run('line4', 'route4', 'run4', 'operator4'));
    }

    public function testSortedRuns()
    {
        $prevNumber = '';
        foreach ($this->repo->getAll() as $run) {
            $this->assertTrue($run->number > $prevNumber);
            $prevNumber = $run->number;
        }
    }

    public function testDuplicateRuns()
    {
        $runs = $this->repo->getAll();
        $this->assertTrue($runs == array_unique($runs));
    }
}