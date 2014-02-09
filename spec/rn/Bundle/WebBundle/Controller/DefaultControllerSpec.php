<?php

namespace spec\rn\Bundle\WebBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerSpec extends ObjectBehavior
{
    function let(EngineInterface $templating)
    {
        $this->beConstructedWith($templating);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('rn\Bundle\WebBundle\Controller\DefaultController');
    }

    function it_should_return_response_on_index_action(EngineInterface $templating, Response $response)
    {
        $templating->renderResponse('rnWebBundle:Default:index.html.twig')->willReturn($response);

        $this->indexAction()->shouldReturn($response);
    }
}
