<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\House;
use App\Http\Resources\House\HouseResource as HouseResource;
use App\Http\Resources\House\HouseCollection as HouseCollection;
use Validator;

class AuthController extends Controller
{
    public $successStatus = 200;

  public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
/**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $phonePattern = '/\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*/';

        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phoneNumber' => 'required|unique:users|min:10|max:15|regex:' . $phonePattern,
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'roleId' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }


        $data = $request->all();
        $user = User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'phoneNumber' => $data['phoneNumber'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['roleId'],
        ]);
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['email'] =  $user->email;
        return response()->json(['success'=>$success], $this-> successStatus);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */

    public function details() {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }

    // public function userHouses() {
    //     $user = Auth::user();
    //       $houses = $user->house;
    //     return new HouseCollection(HouseResource::collection($houses));
    // }

}
