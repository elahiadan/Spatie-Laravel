<?php

namespace App\Http\Controllers;

use App\Models\Coder;
use Illuminate\Http\Request;

class CoderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Coder::latest()->get();
        // dd($data);
        return view('logs.coder', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Coder();

        $input = $request->input();
        $data->name = $input['name'];
        $data->email = $input['email'];
        $data->number = $input['number'];
        $data->lang = $input['lang'];
        $data->save();

        return \redirect()->route('coder');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coder  $coder
     * @return \Illuminate\Http\Response
     */
    public function show(Coder $coder)
    {
        return view('logs.add-coder');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coder  $coder
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = Coder::where('id',$request->id)->first();
        return view('logs.edit-coder', \compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coder  $coder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coder $coder)
    {
        $data = Coder::find($request->id);
        $input = $request->input();
        $data->name = $input['name'];
        $data->email = $input['email'];
        $data->number = $input['number'];
        $data->lang = $input['lang'];
        $data->save();
        return \redirect()->route('coder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coder  $coder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Coder::find($request->id)->delete();
        return \redirect()->route('coder');
    }
}
