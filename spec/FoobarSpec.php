<?php

namespace spec;

use Foobar;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FoobarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Foobar::class);
    }
}
