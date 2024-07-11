<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class RequestHelper
{
    public static function isApiRequest(Request $request)
    {
        return $request->wantsJson() || $request->is('api/*');
    }
}
