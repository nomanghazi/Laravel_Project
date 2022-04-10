<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=School::all();
        $data=School::orderBy('id','desc')->get();

        return view('sch.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('sch.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|min:4|max:20',
            'email'=>'required|min:8|max:20',
            'phone'=>'required|min:8|max:13',
            'adress'=>'required|min:10|max:255'
        ]);
        School::create($request->all());
        return redirect()->action([SchoolController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        $show_data=School::find($school->id);
        return view('sch.single_fetch',compact('show_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $edit_data=School::find($school->id);
        return view('sch.modify',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school=School::find($school->id);
        $school->update($request->all());
        return redirect()->action([SchoolController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
    School::destroy($school->id);
    return redirect()->action([SchoolController::class,'index']);
    }
}
