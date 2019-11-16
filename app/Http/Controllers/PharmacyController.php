<?php

namespace App\Http\Controllers;
use App\Country_City;
use App\Pharmacies;
use App\User;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index()
    {
        $pharmacies = Pharmacies::latest()->paginate(5);
        return view('pharmacy.pharmacy_list', compact('pharmacies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('pharmacy.create_pharmacy');
    }

    public function store(Request $request)
    {
        Pharmacies::create($request->all());

        return redirect()->route('pharmacy.pharmacy_list')
            ->with('success', 'Pharmacy created successfully.');
    }

    public function show(Pharmacies $pharmacy)
    {
        return view('pharmacy.show', ['pharmacy' => $pharmacy]);
    }

    public function edit(Pharmacies $pharmacies)
    {
        return view('pharmacy.edit_pharmacy', compact('pharmacy'));
    }

    public function update(Request $request, Pharmacies $pharmacy)
    {

        $pharmacy->update($request->all());

        return redirect()->route('pharmacy.pharmacy_list')
            ->with('success', 'Pharmacy updated successfully');
    }

    public function destroy(Pharmacies $pharmacy)
    {
        $pharmacy->delete();

        return redirect()->route('pharmacy.pharmacy_list')
            ->with('success', 'Pharmacy deleted successfully');
    }
}
