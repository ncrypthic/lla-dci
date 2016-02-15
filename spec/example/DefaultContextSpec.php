<?php

namespace spec\example;

use PhpSpec\ObjectBehavior;

class DefaultContextSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LLA\Dci\ContextInterface');
    }
    
    function it_should_return_void_on_execute()
    {
        $this->execute()->shouldReturn(null);
    }
    
    function it_should_throws_exception_on_unexpected_data_set()
    {
        $this->shouldThrow('LLA\Dci\ContextException')->duringSet('text', null);
    }
}
