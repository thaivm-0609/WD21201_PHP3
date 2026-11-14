<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //dùng Auth::user() để kiểm tra user đang đăng nhập, nếu null => chưa đăng nhập
        if (!Auth::user()) { //nếu người dùng chưa đăng nhập thì đẩy về trang chủ
            return redirect('/');
        }

        return $next($request); //cho request tiếp tục đi tiếp, đến controller
    }
}
