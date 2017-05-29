<?php

namespace Tests\Feature;

use App\Providers\BackendlessServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author Lester Hurtado <lester@hurtado.ph>
 */

/** test **/
abstract class AbstractBackendlessTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return BackendlessServiceProvider::class;
    }
}