<?php

namespace Tests\Feature;

use Tests\Feature\AbstractBackendlessTestCase;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use App\Providers\BackendlessServiceProvider;

class BackendlessServiceProviderTest extends AbstractBackendlessTestCase
{
    use ServiceProviderTrait;
}
