<?php

namespace Ajeya\LaravelContactForm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ajeya\LaravelContactForm\Skeleton\SkeletonClass
 */
class LaravelContactFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-contact-form';
    }
}
