<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherTinymce.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherTinymce extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        // tinymce.configure
        if ($pathinfo === '/admin/tinymce/configure') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tinymceconfigure;
            }

            return array (  '_controller' => 'Tinymce\\Controller\\ConfigureController::configure',  '_route' => 'tinymce.configure',);
        }
        not_tinymceconfigure:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
