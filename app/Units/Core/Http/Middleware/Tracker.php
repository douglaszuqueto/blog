<?php

namespace App\Units\Core\Http\Middleware;

use App\Domains\Tracker\Services\TrackerService;
use Closure;

class Tracker
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {

    if (env('APP_TRACKER')) {
      $data = [
        'http_uri' => $request->getUri(),
        'request_method' => $request->getRealMethod(),
        'remote_addr' => $request->getClientIp(),
        'remote_host' => $request->server->get('REMOTE_HOST'),
        'request_uri' => $request->server->get('REQUEST_URI'),
        'user_agent' => $request->server->get('HTTP_USER_AGENT'),
        'http_referer' => $request->server->get('HTTP_REFERER'),
      ];

      $service = app()->make(TrackerService::class);

      $service->store($data);
    }

    return $next($request);
  }
}
