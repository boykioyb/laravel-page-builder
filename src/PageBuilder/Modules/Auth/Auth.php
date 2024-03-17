<?php

namespace Boykioyb\LaravelPageBuilder\PageBuilder\Modules\Auth;

use Boykioyb\LaravelPageBuilder\PageBuilder\Contracts\AuthContract;

class Auth implements AuthContract
{

    public function isAuthenticated(): bool
    {
        // TODO: Implement isAuthenticated() method.
        return \Illuminate\Support\Facades\Auth::check();
    }

    public function requireAuth(): bool
    {
       if (!$this->isAuthenticated()){
           abort(401);
       }

       return true;
    }
}
