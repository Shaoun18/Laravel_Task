<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static  $user;

    public static function newuser($request){
        self::$user = new Customer();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->mobile = $request->mobile;
        self::$user->address = $request->address;
        self::$user->password = bcrypt($request->password);
        self::$user->save();
    }

    public static function updateuser($request, $id){
        self::$user = Customer::find($id);
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->mobile = $request->mobile;
        self::$user->address = $request->address;
        self::$user->save();
    }

    public static function deleteuser($id){
        self::$user = Customer::find($id);
        self::$user->delete();
    }
}
