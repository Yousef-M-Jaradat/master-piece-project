<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\admins;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        // Check if the user is an admin (for example, based on role)
        if (auth()->check() && auth()->user()->role === 1) {
            $admins = Admins::all();
            return view('template.pages.tables', compact('admins'));
        }

        // Redirect or return an unauthorized response if the user is not an admin
        return redirect('/sign'); // You can customize the redirection URL
    }
}
