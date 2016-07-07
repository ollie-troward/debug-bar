<?php

namespace spec\Troward\Debug;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Troward\Debug\Bar;

/**
 * Class BarSpec
 * @package spec\Troward\Debug
 */
class BarSpec extends ObjectBehavior
{
    /**
     * Check the bar can be constructed.
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Bar::class);
    }

    /**
     * Check that the display function can be called.
     */
    function it_can_call_the_display_function()
    {
        $this->display()
            ->shouldReturn(null);
    }
}
