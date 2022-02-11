<?php
namespace Wellspring\Models;

class Run
{
    public $line;
    public $route;
    public $number;
    public $operatorId;

    public function __construct($line, $route, $number, $operatorId)
    {
        $this->line = $line;
        $this->route = $route;
        $this->number = $number;
        $this->operatorId = $operatorId;
    }

    public function __toString()
    {
        return $this->number;
    }
}
