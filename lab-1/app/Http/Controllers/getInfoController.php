<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getInfoController extends Controller
{
    public function phpVersion()
    {
        return response()->json([
            'phpinfo' => phpversion()
        ]);
    }

    public function userInfo(Request $request)
    {
        return response()->json([
            'ip' => $request->ip(),
            'user' => $request->userAgent()
        ]);
    }

    public function dbData(){
        return response()->json([
            'database' => DB::connection()->getDatabaseName()
        ]);
    }
}

