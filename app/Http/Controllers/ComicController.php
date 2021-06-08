<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = Comic::all();

        return response()->json([
            'data'  => $comic,
            'success' => true,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();



        return response()->json([
            'message'  => 'Comic save',
            'success' => true,
        ]);
    }



}
