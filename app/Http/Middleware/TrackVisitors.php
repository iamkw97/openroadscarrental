<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle($request, Closure $next)
    {
        $visitor = new Visitor();
        $visitor->ip_address = $request->ip();
        $visitor->user_agent = $request->header('User-Agent');
        $visitor->visited_at = now();
        $visitor->save();

        return $next($request);
    }
}
