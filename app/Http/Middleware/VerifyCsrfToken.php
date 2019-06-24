<?php

namespace musicMart\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
/*{
protected function excludedRoutes($request)  
{
    $routes = [
            'light',
            'edit'
    ];

    foreach($routes as $route)
        if ($request->is($route))
            return true;

        return false;
}

protected $except = [ "light", "edit" ];

}*/


{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}

