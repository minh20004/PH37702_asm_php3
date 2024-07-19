<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Lấy tất cả các menu và các danh mục liên quan
        $menus = Menu::with('categories')->get();
        
        // Chia sẻ dữ liệu menu với tất cả các view
        View::share('menus', $menus);

        return $next($request);
    }
}
