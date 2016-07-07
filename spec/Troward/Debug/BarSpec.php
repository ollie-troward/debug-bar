<?php

namespace spec\Troward\Debug;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Troward\Debug\Bar');
    }
}
