<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class authMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uri = $request->path();
        $user = Auth::user(); // L-user li authentifié
        $permissions = $user->role->permission->pluck('path'); 
        // dd($permissions);
        if(Auth::check() && $permissions->contains($uri)){
            return $next($request);
        }
        return redirect('/404');
    }
}
