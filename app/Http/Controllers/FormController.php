<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function store(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:forms',
            'phone' => 'required|numeric|regex:/(08)[0-9]{9,12}/|unique:forms',
            'address' => 'required|min:8',
            'gender' => 'required|in:man,woman',
        ]);

        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();;
            $responseArr['token'] = '';
            return response()->json(['error' => $responseArr, 'message' => 'Bad Request'], 400);
        }

        $form = Form::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender
        ]);

        
        if ($form) {
            $status = 200;
            $message = "Success Insert Data";
        }else{
            $status = 500;
            $message = "Internal Server Error";
        }

        return response()->json(compact(
            'message', 'status'
        ));
    }

    public function get(Request $request){
        $data = Form::all();
        $status = 200;

        return response()->json(compact('status', 'data'));
    }
}