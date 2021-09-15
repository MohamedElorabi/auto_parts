<?php

namespace App\Http\Controllers\Dashboard;

use App\Company_Info;
use App\Company_sector_specialist;
use App\Http\Controllers\Controller;
use App\Services;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){

        $services_count = Services::count();
        $users_count = User::count();
        $company_count = Company_Info::count();
        $company_sector_count = Company_sector_specialist::count();
        return view('dashboard.home', compact('services_count', 'users_count', 'company_count', 'company_sector_count'));
    }
}
