<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Events\EspYoutube;

class EspController extends Controller
{
    public function sensor ($temperature, $humidity)
    {
        $data = DB::table('suhus');
        $tgl = Carbon::now();

        $data->insert([
            'humidity' => $humidity,
            'temperature' => $temperature,
            'created_at' => $tgl,
            'updated_at' => $tgl
        ]);

        return event(new EspYoutube($temperature, $humidity));
    }
}
