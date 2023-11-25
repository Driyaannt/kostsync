<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $id_role = Role::where('nama_role', $role)->first()->id;
        $user_role_id = auth()->user()->id_role;
        if ($user_role_id == $id_role) {

            return $next($request);
        } else {
            abort(403);
        }
    }
}
