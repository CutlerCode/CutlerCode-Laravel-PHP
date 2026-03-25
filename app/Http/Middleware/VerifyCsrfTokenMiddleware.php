<?php
namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
class VerifyCsrfTokenMiddleware extends PreventRequestForgery {
    protected $except = ['*'];
}