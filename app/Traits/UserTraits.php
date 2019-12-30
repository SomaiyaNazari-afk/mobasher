<?php

namespace App\Traits;


use App\Brand;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

trait UserTraits {

    public function addUser($request) {

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $hashed_random_password = Hash::make(Str::random(8));
        $user->password = bcrypt($hashed_random_password);
        $user->phone = $request->phone;
        $user->save();
        return $user;
    }
}
?>
