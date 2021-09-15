<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services;
use App\Settings;
use Illuminate\Http\Request;

class MainController extends Controller
{

    /** Home page */
    public function index(){
        $settings = Settings::all();
        return view('index', compact('settings'));
    }
    /**End Home */



    /** Services Page */
    public function services()
    {
        $services = Services::all();
        $settings = Settings::all();
        return view('services', compact('services','settings'));
    }

    /**End Services Page */

    /** About Page */
    public function about()
    {
        $settings = Settings::all();
        return view('about', compact('settings'));
    }

    /**End About Page */

    /** help_center  page*/
    public function help_center()
    {
        $settings = Settings::all();
        return view('help_center', compact('settings'));
    }
    /**End help_center Page */

    /** privacy_policy  page*/
    public function privacy_policy()
    {
        $settings = Settings::all();
        return view('privacy_policy', compact('settings'));
    }
    /**End privacy_policy Page */

    /** user_agreement  page*/
    public function user_agreement()
    {
        $settings = Settings::all();
        return view('user_agreement', compact('settings'));
    }
    /**End user_agreement Page */

}
