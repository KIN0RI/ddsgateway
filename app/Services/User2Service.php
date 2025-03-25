<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the User1 Service
     *
     * @var string
     */
    public $baseUri;

    /**
     * User2Service constructor
     */
    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
    }

    /**
     * Obtain the full list of Users from User2 Site
     * @return string
     */
    public function obtainUsers2() 
    {
        return $this->performRequest('GET', '/users');
    }
}
