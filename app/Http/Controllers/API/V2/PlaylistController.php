<?php

namespace App\Http\Controllers\API\V2;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaylistController extends Controller
{
    public function index()
    {
        $song = Playlist::all();

        return response()->json([
            'status' => 200,
            'data' => $song
        ]);
    }
}
