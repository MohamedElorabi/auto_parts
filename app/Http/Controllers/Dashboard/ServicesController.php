<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $services = Services::all();
    return view('dashboard.services.index', compact('services'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('dashboard.services.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
        'service_name' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:png,jpg,jpeg',
    ],[
        'service_name.required' => 'حقل اسم الخدمة مطلوب',
        'description.required' =>'حقل نبذة عن الخدمة مطلوب',
        'image.required' =>'حقل صورة الخدمة مطلوب',
        'image.mimes' =>'يجب أن يكون امتداد الصورة png,jpg,jpeg',
    ]);
    $service = Services::create($request->all());
    if ( $request->hasFile('image')  ) {
        $img = $request->image;
        $extention = $img->getClientOriginalName();
        $img_new_name = time(). '.' .$extention;
        $img->move('uploads/services', $img_new_name);
        $service->image = 'uploads/services/'.$img_new_name;
        $service->save();
    }
    session()->flash('success', __('تم إنشاء بيانات الخدمات بنجاح'));
    return redirect()->route('services.index');
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
    $service = Services::findOrFail($id);
    return view('dashboard.services.edit', compact('service'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {

    $service = Services::findOrFail($id);
    $service->service_name = $request->input('service_name');
    $service->description = $request->input('description');

    if ( $request->hasFile('image')) {
        $path = public_path().'/'.$service->image;

        if(File::exists($path)){

            File::delete($path);
        }
        $img = $request->image;
        $extention = $img->getClientOriginalName();
        $img_new_name = time(). '.' .$extention;
        $img->move('uploads/services', $img_new_name);
        $service->image = $img_new_name;

    }

    $service->update();
    session()->flash('success', __('تم تعديل بيانات الخدمة بنجاح'));
    return redirect()->route('services.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $service = Services::find($id);
    unlink(public_path().'/'.$service->image);
    $service->delete();
    session()->flash('success', __('تم الحذف بنجاح'));
    return redirect(route('services.index'));
  }

}

?>
