<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaryModel;

class TheDiary extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DiaryModel::all();
        return view('TheDiary.display', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TheDiary/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DiaryModel();
        $data->title = $request->input('title');
        $data->image = "None";
        $data->author = $request->input('author', "Bejo");
        $data->diary = $request->input('diary');
        $data->save();

        return redirect('/TheDiary');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data = DiaryModel::find($id);

        return view('TheDiary/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DiaryModel::find($id);
        $data->title = $request->input('title');
        $data->author = $request->input('author', "Bejo");
        $data->diary = $request->input('diary');
        $data->save();

        return redirect('/TheDiary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DiaryModel::find($id);
        $data->delete();

        return redirect('/TheDiary');
    }
}
