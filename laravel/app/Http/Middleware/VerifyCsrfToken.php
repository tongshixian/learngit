<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/*', 'student/*', 'planeLogin/*', 'view/*', 'photo/*', 'mail/*', 'sale/*', 'apartment/*', 'room/*', 'week1shop/*','/wexin/*','/learn/ajax/*','flatType/*','flatAttribute/*','flatSku/*','month/*'
    ];
}
