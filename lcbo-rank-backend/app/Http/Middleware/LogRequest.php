<?php

namespace App\Http\Middleware;

use App\Models\ApiRequest;
use Closure;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        ApiRequest::query()->create([
            'query_parameters' => json_encode($request->query()),
            'host' => $request->server('HTTP_HOST'),
            'route' => $request->server('REQUEST_URI'),
            'method' => $request->server('REQUEST_METHOD'),
            'user_agent' => $request->header('user-agent'),
            'duration' => $request->server('REQUEST_TIME')
        ]);

        return $next($request);
    }
}
