<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $settings = Settings::all();
    return view('contact.contact_us', compact('settings'));
  }

  public function sendEmail(Request $request)
  {
      $datalis=[
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message,
      ];

      Mail::to('elorabi199@gmail.com')->send(new ContactMail($datalis));
      return back()->with('message_sent', 'تم ارسال رسالتك بنجاح');
  }


}

?>
