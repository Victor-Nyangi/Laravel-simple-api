<?php

namespace App\Http\Controllers;

use App\Models\CandSummary;
use Attribute;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class CandSummaryController extends Controller
{

    private function fetchData()
    {
        // using a private to avoid conflicting api and web routes
        $cycles = [2012, 2014, 2016, 2018, 2020, 2022];

        $method = 'candSummary';
        $output = 'json';
        $cid = 'N00007360';
        // $cid = 'N00000781'
        $cycle = Arr::random($cycles);
        $apikey = 'b3387953b0d86dcae8a98bfed9498222';

        $url = 'https://www.opensecrets.org/api/?method=' . $method . '&output=' . $output . '&cid=' . $cid . '&cycle=' . $cycle . '&apikey=' . $apikey;

        $data = Http::get($url)->json();
        $attributes = $data['response']['summary']['@attributes'];
        // dd($attributes);

        if (CandSummary::where(['cid' => $cid])->exists()) {
            CandSummary::where(['cid' => $cid])->delete();
        }
        CandSummary::create($attributes);

        $summaries = CandSummary::all();

        return $summaries;
    }

    public function index()
    {
        return response()->json(['status' => 'info', 'data' => $this->fetchData()]);
    }

    public function summaries()
    {
        return view('welcome')->with([
            'summaries' => $this->fetchData()
        ]);
    }
}
