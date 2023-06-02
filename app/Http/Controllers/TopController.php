<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $items = News::orderBy('id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $data = [
            'news' => $items,
        ];

        return view('fronts.index', $data);
    }
}
