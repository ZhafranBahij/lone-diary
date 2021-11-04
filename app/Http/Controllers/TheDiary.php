<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        // $data = DiaryModel::all();
        $data = DiaryModel::paginate(3);
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
        // $validated = $request->validate([
        //     'diary_image' => 'image|nullable',
        // ]);

        $data = new DiaryModel();
        $data->title = $request->input('title');
        $data->image = "diary_image/diaryImage.jpg";
        $data->author = auth()->user()->name;
        $data->diary = $request->input('diary');
        // if($request->hasFile('diary_image')){
        //     $path = $request->file('diary_image')->store('public/diary_image');
        //     $data->image = str_replace("public/", "", $path);
        // }
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
        $data->diary = $request->input('diary');
        // if($data->image !="diary_image/diaryImage.jpg "){
        //     Storage::delete($data->image);
        // }
        // if($request->hasFile('diary_image')){
        //     $path = $request->file('diary_image')->store('public/diary_image');
        //     $data->image = str_replace("public/", "", $path);
        // }
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
        if($data->image !="diary_image/diaryImage.jpg "){
            Storage::delete($data->image);
        }
        $data->delete();

        return redirect('/TheDiary');
    }

    // for authorization
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
}
