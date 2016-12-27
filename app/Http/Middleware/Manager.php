<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //refactor this shit.
    public function handle($request, Closure $next)
    {
        if(!Auth::check()) {
            return redirect('users/login');
        } else {
            $user = Auth::user();
            if($user->hasRole('Manager'))
            {
                return $next($request);
            } else {
                return redirect('/');
            }
        }
    }
}
