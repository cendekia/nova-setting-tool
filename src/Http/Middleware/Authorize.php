<?php

namespace Cendekia\SettingTool\Http\Middleware;

use Cendekia\SettingTool\SettingTool;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(SettingTool::class)->authorize($request) ? $next($request) : abort(403);
    }
}
