<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $regions = Region::all();
    return view('dashboard.region.index', compact('regions'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('dashboard.region.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
        'region_name' => 'required|unique:region|max:120',
    ],[
        'region_name.required' =>'يرجي ادخال اسم المنطقة',
        'region_name.unique' =>'اسم المنطقة مسجل مسبقا',
    ]);

    $data =   $request->all() ;
    $region = Region::create($data);
    session()->flash('success', __('تم إنشاء اسم المنطقة بنجاح'));
    return redirect()->route('region.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $region = Region::findOrFail($id);
    return view('dashboard.region.edit', compact('region'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {
    $region = Region::findOrFail($id);
    $region->update($request->all());
    session()->flash('success', __('تم تعديل اسم المنطقة بنجاح'));
    return redirect()->route('region.index');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $region = Region::find($id);
    $region->delete();
    session()->flash('success', __('تم الحذف بنجاح'));
    return redirect(route('region.index'));
  }

}

?>
