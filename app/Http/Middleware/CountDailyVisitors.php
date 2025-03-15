<?php

namespace App\Http\Middleware;

use App\Models\DailyVisitor;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountDailyVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->is('admin/*') && !$request->is('auth/*')) {
            $today = Carbon::today()->toDateString();
            $sessionKey = 'visited_' . $today;

            if (!session()->has($sessionKey)) {
                // Update or create visitor count
                DailyVisitor::updateOrCreate(
                    ['date' => $today],
                    ['count' => \DB::raw('count + 1')]
                );

                // Set session flag
                session([$sessionKey => true]);
            }
        }
        return $next($request);
    }
}
