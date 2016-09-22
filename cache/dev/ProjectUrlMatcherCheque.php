<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherCheque.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherCheque extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // cheque.configure
        if ($pathinfo === '/admin/cheque/configure') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_chequeconfigure;
            }

            return array (  '_controller' => 'Cheque\\Controller\\ConfigureController::configure',  '_route' => 'cheque.configure',);
        }
        not_chequeconfigure:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
