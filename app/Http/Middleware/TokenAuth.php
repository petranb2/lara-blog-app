<?php

namespace App\Http\Middleware;

use App\Services\TokenAuthService;
use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;


class TokenAuth
{

    protected $tokenAuthService;

    public function __construct(TokenAuthService $tokenAuthService)
    {
        $this->tokenAuthService = $tokenAuthService;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Application|ResponseFactory|Response
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info('This is a log');
        Log::info(env('APP_ENV'));
        Log::info($this->tokenAuthService->checkAuthToken());
        $request->header('token');
        return response('Not valid token provider.', 200);
    }
}
