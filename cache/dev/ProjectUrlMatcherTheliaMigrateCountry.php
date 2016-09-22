<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ProjectUrlMatcherTheliaMigrateCountry.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcherTheliaMigrateCountry extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/admin/configuration/countries')) {
            // admin.configuration.countries.migrate
            if ($pathinfo === '/admin/configuration/countries/migrate') {
                return array (  '_controller' => 'TheliaMigrateCountry\\Controller\\MigrateController::migrateSystemAction',  '_route' => 'admin.configuration.countries.migrate',);
            }

            // admin.configuration.countries.do-migrate
            if ($pathinfo === '/admin/configuration/countries/do-migrate') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminconfigurationcountriesdomigrate;
                }

                return array (  '_controller' => 'TheliaMigrateCountry\\Controller\\MigrateController::doMigrateSystemAction',  '_route' => 'admin.configuration.countries.do-migrate',);
            }
            not_adminconfigurationcountriesdomigrate:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
