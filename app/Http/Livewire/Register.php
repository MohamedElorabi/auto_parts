<?php

namespace App\Http\Livewire;

use App\Activity_type;
use App\Company_Info;
use App\Company_sector_specialist;
use App\New_branch;
use App\Region;
use App\Rules\LangEn;
use App\Settings;
use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;


use Illuminate\Validation\ValidationException;

class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $password;
    public $password2;
    public $type;
    public $email;
    public $phone;
    public $pin_code;
    public $user_id;
    public $activity_type_id;
    public $facility_name;
    public $owners_number;
    public $date;
    public $commercial_register_image;
    public $bank_account_number;
    public $region_id;
    public $city;
    public $agent_company;
    public $company_sector_specialist_id;
    public $other_branches;
    public $authorized_distributor;
    public $address;
    public $showOtherBranches = false;
    public $branches = [];
    public $step=1;

    public function mount(){
        $this->step=1;
        $this->branches [] = ['city' => '','region_id' => '','phone' => '','establishment_location' => ''];
    }

    public function render()
    {
        $activity_types = Activity_type::all();
        $regions = Region::all();
        $settings = Settings::all();
        $company_sectors = Company_sector_specialist::all();
        return view('livewire.register', compact('regions', 'company_sectors', 'activity_types', 'settings'));
    }

    public function addBranch()
    {
        foreach ($this->branches as $index => $value) {
            $rules["branches.{$index}.region_id"] = [
                'bail',
                'required',
            ];
            $attributesName["branches.{$index}.region_id"] = 'المنطقة';

            $rules["branches.{$index}.city"] = [
                'bail',
                'required',
            ];
            $attributesName["branches.{$index}.city"] = 'المدينة';

            $rules["branches.{$index}.phone"] = [
                'bail',
                'required',
            ];
            $attributesName["branches.{$index}.phone"] = 'رقم الجوال';

            $rules["branches.{$index}.establishment_location"] = [
                'bail',
                'required',
            ];
            $attributesName["branches.{$index}.establishment_location"] = 'موقع المنشأة';
        }
        $this->validate($rules, [], $attributesName);

        $this->branches [] = ['city' => '','region_id' => '','phone' => '','establishment_location' => ''];
        // dd($this->branches);
    }

    public function validateUserform()
    {
         $this->step=1;

            $this->validate(
                [
                    'name' => ['required','string',new LangEn],
                    'email' => ['required','email'],
                    'password' => ['required'],
                    'phone' => ['required'],

                ],
                [],
                ['name' => 'اسم المدير'],
                ['email' => 'الايميل'],
                ['password' => 'كلمة المرور'],
                ['password2' => 'تأكيد كلمة المرور'],
                ['phone' => 'رقم الجوال'],
            );
            // save user data
             $user= User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'phone' => $this->phone,
            ]);

             session()->put('user',$user);
            // dd(session()->get('user')->id);
            $this->dispatchBrowserEvent('modalShow');
    }

    public function updatedOtherBranches()
    {
        if ($this->other_branches == 1){
            $this->showOtherBranches =true;
            return ;
        }
        $this->showOtherBranches=false;

    }

    public function checkCode()
    {
        if($this->pin_code == 6666){
            $this->step=2;
            $this->dispatchBrowserEvent('modalClose');
        }

    }
    public function saveCompanyData()
    {

         $this->validate([

            'activity_type_id'  => ['required'],
            'facility_name' => ['required'],
            'owners_number' => ['required'],
            'date' => ['required'],
            'bank_account_number' => ['required'],
            'city' => ['required'],
            'agent_company' => ['required'],
            'company_sector_specialist_id' => ['required'],
            'authorized_distributor' => ['required'],
            'region_id' => ['required'],
         ]);

         Company_Info::create(
             [

                 'user_id'=> session()->get('user')->id,
                 'activity_type_id'    => $this->activity_type_id,
                 'facility_name'    => $this->facility_name,
                 'owners_number'     => $this->owners_number,
                 'date'              => $this->date,
                 'commercial_register_image' => $this->commercial_register_image->store('commercial_register','public'),
                 'bank_account_number' => $this->bank_account_number,
                 'region_id'           => $this->region_id,
                 'city'                => $this->city,
                 'agent_company'       => $this->agent_company,
                 'company_sector_specialist_id' => $this->company_sector_specialist_id,
                 'authorized_distributor' => $this->authorized_distributor,
                 'other_branches'         => $this->other_branches,

             ]
        );

        New_branch::insert(
            $this->branches
        );

        $this->step=3;

    }
}
