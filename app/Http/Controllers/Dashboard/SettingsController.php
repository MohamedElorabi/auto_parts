<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $settings = Settings::all();
    return view('dashboard.settings.index', compact('settings'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('dashboard.settings.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
        'about' => 'required',
        'privacy_policy' => 'required',
        'user_agreement' => 'required',
        'help_center' => 'required',
        'facebook_url' => 'required',
        'instagram_url' => 'required',
        'snap_chat_url' => 'required',
        'twitter_url' => 'required',
    ]);

    $data =   $request->all() ;
    $setting = Settings::create($data);
    session()->flash('success', __('تم إنشاء بيانات الإعدادات بنجاح'));
    return redirect()->route('settings.index');
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
    $setting = Settings::findOrFail($id);
    return view('dashboard.settings.edit', compact('setting'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {
    $setting = Settings::findOrFail($id);
    $setting->update($request->all());
    session()->flash('success', __('تم تعديل الإعدادات بنجاح'));
    return redirect()->route('settings.index');
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $setting = Settings::find($id);
    $setting->delete();
    session()->flash('success', __('تم الحذف بنجاح'));
    return redirect(route('settings.index'));
  }

}

?>
