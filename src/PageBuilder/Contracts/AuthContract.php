<?php

namespace Boykioyb\LaravelPageBuilder\PageBuilder\Contracts;

interface AuthContract
{
    /**
     * Return whether the current request has an authenticated session.
     *
     * @return bool
     */
    public function isAuthenticated();

    public function requireAuth();

}
