<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\BackUrl;
class ControlURLs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $current_url = BackUrl::where('back_url',url()->current())->orderBy('id','DESC')->first();
        if($current_url == null ){
            $current_url = BackUrl::create(
                [
                    'back_url' => url()->current(),
                    'user_id' => $request->user()->id,
                ]);
        }
        $back_url = BackUrl::where('id','<',$current_url->id)->whereNot('back_url',url()->current())->orderBy('id','DESC')->first();

        view()->share('back_url', $back_url?->back_url);
        return $next($request);
    }
}
