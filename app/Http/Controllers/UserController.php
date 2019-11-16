<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

class UserController extends Controller
{
      public function index()
      {
          $users = User::all();

          return view('pharmacy.index',compact('users'))
              ->with('i', (request()->input('page', 1) - 1) * 5);
      }

    public function create()
    {
        return view('pharmacy.create');
    }

    public function store(Request $request)
    {
        if (!$request->has('password')) {
            $hashed_random_password = Hash::make(Str::random(8));
            $request->request->add(['password' => bcrypt($hashed_random_password)]);
        }

        User::create($request->all());

        return redirect()->route('pharmacy.index')
            ->with('success','User created successfully.');
    }

    public function show(User $user)
    {
        return view('pharmacy.user_list',compact('user'));
    }

    public function edit(User $user)
    {
        return view('pharmacy.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([

        ]);

        $user->update($request->all());

        return redirect()->route('pharmacy.index')
            ->with('success','User updated successfully');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('pharmacy.index')
            ->with('success','User deleted successfully');
    }
}
