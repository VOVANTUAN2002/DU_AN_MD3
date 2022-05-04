<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if(!$user){
            return redirect()->back();
        } 
        $role_id = $user->role_id;
        // dd($user->role_id);
        $login = [];
        $login[0] = '';
        $login[1] = 'LoginAdmin';
        $login[2] = 'LoginUser';
        $login[3] = 'LoginCustomer';
        // dd($login);  
        foreach ($login as $key => $value) {
            if($user->role_id == $key){
                return $next($request);
            }
        }
        return redirect()->back();
    }
}
