<?php

namespace App\Http\Controllers\Dashboard;

use App\Activity_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Activity_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity_types = Activity_type::all();
        return view('dashboard.activity_types.index', compact('activity_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.activity_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:activity_types|max:120',
        ],[
            'name.required' =>'يرجي ادخال نوع النشاط',
            'name.unique' =>'نوع النشاط مسجل مسبقا',
        ]);

        $data =   $request->all() ;
        $activity_type = Activity_type::create($data);
        session()->flash('success', __('تم إنشاء نوع النشاط بنجاح'));
        return redirect()->route('activity_types.index');
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
        $activity_types = Activity_type::findOrFail($id);
        return view('dashboard.activity_types.edit', compact('activity_types'));
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
        $activity_type = Activity_type::findOrFail($id);
        $activity_type->update($request->all());
        session()->flash('success', __('تم تعديل نوع النشاط بنجاح'));
        return redirect()->route('activity_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity_type = Activity_type::find($id);
        $activity_type->delete();
        session()->flash('success', __('تم الحذف بنجاح'));
        return redirect(route('activity_types.index'));
    }
}
