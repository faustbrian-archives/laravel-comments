<?php

namespace Laravel\Cashier\Tests;

use Illuminate\Contracts\Console\Application;
use KodeKeep\Skeleton\Facades\SkeletonFacade;
use KodeKeep\Skeleton\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders(Application $app): array
    {
        return [SkeletonServiceProvider::class];
    }

    protected function getPackageAliases(Application $app): array
    {
        return ['Skeleton' => SkeletonFacade::class];
    }
}
