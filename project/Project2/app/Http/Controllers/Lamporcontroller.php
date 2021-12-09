<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lampor;


class Lamporcontroller extends Controller
{


    public function getAllLampor() {
        $lampor = Lampor::get()->toJson(JSON_PRETTY_PRINT);
        return response($lampor, 200);
    }

    public function createLampor(Request $request){
        $lampor = new Lampor;
        $lampor->name= $request->name;
        $lampor->course = $request->course;
        $lampor->save();

        return response()->json(
            ["message"=> "student record created"],
            201
        );
    }

    public function getLampor($id){
        if(lampor::where('id', $id)->exists()){
            $lampor = lampor::where('id, $id')->get()->json(JSON_PRETTY_PRINT);
            return response($lampor, 200);
        } else {
            return response()->json([
                "message" => "Lampor not found"
            ], 400);
            }
        }

    
    public function updateLampor(Request $request, $id)
    {
        if(Lampor::where('id', $id)->exists()) {
            $lampor = Lampor::find($id);
            $lampor->name = is_null($request->name) ? $lampor->name : $request->name;
            $lampor->course = is_null($request->course) ? $lampor->course : $lampor->course;
            $lampor->save();

            return response()->json([
                "message" => "records updated succesfully"
            ], 200);   
        } else {
            return response()->json([
                "message" => "Lampor not found"
            ], 404);
        }
    }

    public function deleteLampor($id){
        if(Lampor::where('id', $id)->exists()) {
            $lampor = Lampor::find($id);
            $lampor->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Lampor not found"
            ], 404);
        }
    }

}
?>