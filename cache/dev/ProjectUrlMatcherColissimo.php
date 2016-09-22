<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherColissimo.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherColissimo extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/admin/module/colissimo')) {
            // colissimo.edit.prices
            if ($pathinfo === '/admin/module/colissimo/prices') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_colissimoeditprices;
                }

                return array (  '_controller' => 'Colissimo\\Controller\\EditPrices::editprices',  '_route' => 'colissimo.edit.prices',);
            }
            not_colissimoeditprices:

            // colissimo.edit.freeshipping
            if ($pathinfo === '/admin/module/colissimo/freeshipping') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_colissimoeditfreeshipping;
                }

                return array (  '_controller' => 'Colissimo\\Controller\\FreeShipping::set',  '_route' => 'colissimo.edit.freeshipping',);
            }
            not_colissimoeditfreeshipping:

            // colissimo.export
            if ($pathinfo === '/admin/module/colissimo/export') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_colissimoexport;
                }

                return array (  '_controller' => 'Colissimo\\Controller\\Export::exportAction',  '_route' => 'colissimo.export',);
            }
            not_colissimoexport:

            // colissimo.configuration
            if ($pathinfo === '/admin/module/colissimo/configuration/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_colissimoconfiguration;
                }

                return array (  '_controller' => 'Colissimo\\Controller\\Configuration::editConfiguration',  '_route' => 'colissimo.configuration',);
            }
            not_colissimoconfiguration:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
