<?php
namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();
        $departingTrains = Train::whereDate('departure_time', $today)->get();

        return view('index', compact('departingTrains'));
    }
}