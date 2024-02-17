<?php

namespace App\Http\Middleware;

use App\Services\AdminAuthManagerInterface;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{

    public function __construct(private readonly AdminAuthManagerInterface $authManager)
    {

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$this->authManager->isAdmin($request)) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}