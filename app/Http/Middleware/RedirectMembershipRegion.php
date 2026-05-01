<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectMembershipRegion
{

    public function handle(Request $request, Closure $next)
    {
        $country = $request->header('CF-IPCountry');

        $isAuNz = in_array($country, ['AU', 'NZ']);

        // Manual override links
        if ($request->query('region') === 'us') {
            session(['membership_region' => 'us']);
            return redirect()->route('membership.us');
        }

        if ($request->query('region') === 'au') {
            session(['membership_region' => 'au']);
            return redirect()->route('membership.au');
        }

        // Respect manual choice
        if (session('membership_region') === 'us') {
            return $next($request);
        }

        if (session('membership_region') === 'au' && $request->routeIs('membership.us')) {
            return redirect()->route('membership.au');
        }

        // Auto-route AU/NZ visitors
        if ($isAuNz && $request->routeIs('membership.us')) {
            return redirect()->route('membership.au');
        }

        return $next($request);
    }
}
