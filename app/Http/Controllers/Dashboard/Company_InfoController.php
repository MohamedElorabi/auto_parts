<?php

namespace App\Http\Controllers\Dashboard;

use App\Company_Info;
use App\Activity_type;
use App\Http\Controllers\Controller;
use App\Region;
use App\User;
use App\Company_sector_specialist;
use Illuminate\Http\Request;

class Company_InfoController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $companies_info = Company_Info::all();
    $activity_type = Activity_type::all();
    $user = User::all();
    $region = Region::all();
    $company_sectors = Company_sector_specialist::all();
    return view('dashboard.company_info.index', compact('companies_info','activity_type', 'user', 'company_sectors'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $company_info = Company_Info::findOrFail($id);
      return view('dashboard.company_info.show',compact('company_info'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
