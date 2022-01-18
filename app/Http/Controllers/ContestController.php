<?php

namespace App\Http\Controllers;
use App\Models\ContestModel;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.contest_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contest_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'contest_name'=>'required',
        //     'contest_banner'=>'required',
        //     'prices'=>'required',
        //     'age_groups'=>'required',
        //     'contest_descripition'=>'required',
        //     'start_date'=>'required',
        //     'end_date'=>'required'
        // ]);

        $data = $request->input();
        $contest = new contestModel();
        $contest->contest_name = $data['contest_name'];
       // $contest->contest_banner = $data['contest_banner'];
        $contest->prices = $data['prices'];
        $contest->age_groups = $data['age_groups'];
        $contest->contest_descripition = $data['contest_descripition'];
        $contest->start_date = $data['start_date'];
        $contest->duration_date = $data['duration_date'];
        $contest->end_date = $data['end_date'];

        if($request->hasfile('contest_banner'))
        {
            $file = $request->file('contest_banner');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('upload-contest-banner'), $filename);
            $contest->contest_banner = $filename;
        }

        $contest->save();
        return back()->with('success','Inserted Successfully.');



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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
