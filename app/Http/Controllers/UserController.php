<?php

namespace App\Http\Controllers;
use App\Pharmacy;
use Redirect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with([
        'country:id,name', 'province:id,name'])->latest()->paginate(5);

        return view('users.list', compact('users'))
        ->with('i', (request()->input('page', 1) -1) *5);

    }

    public function create()
    {
        return view('users.create');
    }

    public function save(Request $request)
    {
         return redirect()->route('users.list')
         ->with('success','User created successfully.');
   }


    public function store(Request $request)
    {
        if (!$request->has('password')) {
            $hashed_random_password = Hash::make(Str::random(8));
            $request->request->add(['password' => bcrypt($hashed_random_password)]);
        }

        Pharmacy::create($request->all());

        return redirect()->route('pharmacies.list')
            ->with('success', 'Pharmacy created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {//validate
        $userData = [
          'first_name' => $request->get('first_name'),
          'last_name' => $request->get('last_name'),
          'email' => $request->get('email'),
          'phone' => $request->get('phone'),
          'country_id' => $request->get('country'),
          'address' => $request->get('address'),
        ];
        $user->update($userData);

        return redirect()->route('users.list')
            ->with('success','User updated successfully');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.list')
            ->with('success','Users deleted successfully');
    }
}
