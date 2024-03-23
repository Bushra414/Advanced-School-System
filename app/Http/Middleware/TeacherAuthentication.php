<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherAuthentication
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('teacher_id')) {
            
            return redirect()->route('teacher-sign-in-form');
        }

        return $next($request);
    }
}
