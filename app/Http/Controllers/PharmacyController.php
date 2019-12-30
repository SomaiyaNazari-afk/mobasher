<?php

namespace App\Http\Controllers;
use App\Attachment;
use App\Country_City;
use App\Http\Requests\PharmacyStoreRequest;
use App\Traits\FileUploadTraits;
use App\Traits\UserTraits;
use App\Pharmacies;
use App\Pharmacy;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PharmacyController extends Controller
{
    use UserTraits;
    public function index()
    {
        $pharmacies = Pharmacy::with([
        'user:id,first_name,last_name',
        'country:id,name', 'province:id,name'])->latest()->paginate(5);

        return view('pharmacies.list', compact('pharmacies'))
            ->with('i', (request()->input('page', 1) -1) *5);

    }

    public function create()
    {
        return view('pharmacies.create');
    }

    public function store(Request $request)
    {
        $validator = $this->getValidator($request);
//        $validator->validate();

        static $afghanistanID = 1;
        $pharmacyOwner = $this->addUser($request);

//        dd($pharmacyOwner);
        $pharmacy = new Pharmacy();
        $pharmacy->name = $request->name;
        $pharmacy->owner_id = $pharmacyOwner->id;
        $pharmacy->country_id = $request->country;

        if($request->country == $afghanistanID)
        {
            $pharmacy->province_id = $request->province;
        }
        else
        {
            $pharmacy->city = $request->city;
        }
        $pharmacy->address = $request->address;
        $pharmacy->save();

//        $pharmacyLogo = $this->file($request);


        return redirect()->route('pharmacies.list')
            ->with('success', 'Pharmacy created successfully.');

    }


    protected function getValidator(Request $request)
    {
        $afghanistanID = 1;
        $rules =  [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',

            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'image' => 'required',
        ];

        if(request('country') == $afghanistanID) {
            $rules['province'] = 'required';
        } else {
            $rules['city'] = 'required';
        }

        return Validator::make($request->all(), $rules);
    }


    public function show(Pharmacy $pharmacy)
    {
        return view('pharmacies.show',compact('pharmacy'));
    }

    public function edit(Pharmacy $pharmacy)
    {
        return view('pharmacies.edit', compact('pharmacy'));
    }

    public function update(Request $request, Pharmacies $pharmacy)
    {
        /**
         * @todo: Following items should be considered
         * 1- Add validation rules to check data,
         * 2- Parse form data, and extract the exact fields to use for update of pharmacy
         */

        $pharmacyData = [
            'name' => $request->get('name'),
//            'owner_id' => $request->get('owner_id'),
//            'country_id' => $request->get('country_id'),
            'province_id' => $request->get('province_id'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
        ];

//        $request->validate([
//            'name' => 'required',
//            'owner_id' => 'required',
//            'country_id' => 'required',
//            'province_id' => 'required',
//            'address' => 'required',
//        ]);

        $pharmacy->update($pharmacyData);

        return redirect()->route('pharmacies.list')
            ->with('success', 'Pharmacy updated successfully');
    }

    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacy->delete();

        return redirect()->route('pharmacies.list')
            ->with('success','Pharmacy deleted successfully');

    }


    public function attachPharmacyLogo($pharmacy, $logo) {
        dd($logo, $pharmacy);
    }
    public function call()
    {
        $pharmacy = new Pharmacy();
        $pharmacy->save();

        return $this->storePharmacy();
    }

}


//                $pharmacy->name = $request->name;
//                $pharmacy->owner_id = $user->id;
//                $pharmacy->country_id = $request->country_id;
//                $pharmacy->province_id = $request->province_id;
//                $pharmacy->address = $request->address;
//                $pharmacy->logo = $request->logo;
