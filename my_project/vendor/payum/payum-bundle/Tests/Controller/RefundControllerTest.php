<?php
namespace Payum\Bundle\PayumBundle\Tests\Controller;

use Payum\Bundle\PayumBundle\Controller\RefundController;
use Payum\Core\Model\Token;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

class RefundControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfController()
    {
        $rc = new \ReflectionClass('Payum\Bundle\PayumBundle\Controller\RefundController');

        $this->assertTrue($rc->isSubclassOf('Symfony\Bundle\FrameworkBundle\Controller\Controller'));
    }

    /**
     * @test
     */
    public function shouldExecuteRefundRequest()
    {
        $request = Request::create('/');
        $request->query->set('foo', 'fooVal');

        $token = new Token;
        $token->setGatewayName('theGateway');
        $token->setAfterUrl('http://example.com/theAfterUrl');

        $tokenVerifierMock = $this->getMock('Payum\Core\Security\HttpRequestVerifierInterface');
        $tokenVerifierMock
            ->expects($this->once())
            ->method('verify')
            ->with($this->identicalTo($request))
            ->will($this->returnValue($token))
        ;
        $tokenVerifierMock
            ->expects($this->once())
            ->method('invalidate')
            ->with($this->identicalTo($token))
        ;

        $gatewayMock = $this->getMock('Payum\Core\GatewayInterface');
        $gatewayMock
            ->expects($this->once())
            ->method('execute')
            ->with($this->isInstanceOf('Payum\Core\Request\Refund'))
        ;

        $registryMock = $this->getMock('Payum\Core\Registry\RegistryInterface');
        $registryMock
            ->expects($this->once())
            ->method('getGateway')
            ->with('theGateway')
            ->will($this->returnValue($gatewayMock))
        ;

        $container = new Container;
        $container->set('payum', $registryMock);
        $container->set('payum.security.http_request_verifier', $tokenVerifierMock);

        $controller = new RefundController;
        $controller->setContainer($container);

        $response = $controller->doAction($request);

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\RedirectResponse', $response);
        $this->assertEquals('http://example.com/theAfterUrl', $response->getTargetUrl());
    }

    /**
     * @test
     */
    public function shouldExecuteRefundRequestWithoutAfterUrl()
    {
        $request = Request::create('/');
        $request->query->set('foo', 'fooVal');

        $token = new Token;
        $token->setGatewayName('theGateway');
        $token->setAfterUrl(null);

        $tokenVerifierMock = $this->getMock('Payum\Core\Security\HttpRequestVerifierInterface');
        $tokenVerifierMock
            ->expects($this->once())
            ->method('verify')
            ->with($this->identicalTo($request))
            ->will($this->returnValue($token))
        ;
        $tokenVerifierMock
            ->expects($this->once())
            ->method('invalidate')
            ->with($this->identicalTo($token))
        ;

        $gatewayMock = $this->getMock('Payum\Core\GatewayInterface');
        $gatewayMock
            ->expects($this->once())
            ->method('execute')
            ->with($this->isInstanceOf('Payum\Core\Request\Refund'))
        ;

        $registryMock = $this->getMock('Payum\Core\Registry\RegistryInterface');
        $registryMock
            ->expects($this->once())
            ->method('getGateway')
            ->with('theGateway')
            ->will($this->returnValue($gatewayMock))
        ;

        $container = new Container;
        $container->set('payum', $registryMock);
        $container->set('payum.security.http_request_verifier', $tokenVerifierMock);

        $controller = new RefundController;
        $controller->setContainer($container);

        $response = $controller->doAction($request);

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Response', $response);
        $this->assertEquals(204, $response->getStatusCode());
    }
}
