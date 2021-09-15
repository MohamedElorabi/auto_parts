<?php

namespace App\Http\Controllers\Dashboard;

use App\Company_sector_specialist;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Company_sector_specialistController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $company_sectors = Company_sector_specialist::all();
    return view('dashboard.Company_sector_specialist.index', compact('company_sectors'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('dashboard.Company_sector_specialist.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
        'name' => 'required|unique:company_sector_specialist|max:120',
    ],[
        'name.required' =>'يرجي ادخال اسم قطاع الشركة',
        'name.unique' =>'اسم قطاع الشركة مسجل مسبقا',
    ]);

    $data =   $request->all() ;
    $region = Company_sector_specialist::create($data);
    session()->flash('success', __('تم انشاء بيانات  قطاع الشركات بنجاح'));
    return redirect()->route('company_sector_specialist.index');
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
    $company_sector = Company_sector_specialist::findOrFail($id);
    return view('dashboard.Company_sector_specialist.edit', compact('company_sector'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {
    $company_sector = Company_sector_specialist::findOrFail($id);
    $company_sector->update($request->all());
    session()->flash('success', __('تم تعديل بيانات قطاع الشركات بنجاح'));
    return redirect()->route('company_sector_specialist.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $company_sector = Company_sector_specialist::find($id);
    $company_sector->delete();
    session()->flash('success', __('تم الحذف بنجاح'));
    return redirect(route('company_sector_specialists.index'));
  }

}

?>
