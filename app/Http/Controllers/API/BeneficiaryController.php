<?php

namespace App\Http\Controller\API;

use App\Models\Beneficiary;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;

class BeneficiaryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beneficiaries = Beneficiary::all();
        return $this->sendResponse($beneficiaries, 'List of beneficiaries');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        try {
            // Create benef
            $benef = new Beneficiary();
            $benef->name = $request->name;
            $benef->description = $request->description;
            $benef->save();
            
            // Return Json Response
            return $this->sendResponse($benef, 'User login successfully.');
        } catch (\Exception $e) {
            // Return Json Response
            return $this->sendError('Unauthorised', ['error'=>'Unauthorised']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Beneficiary::destroy($id);
        return $this->sendResponse($success, 'Beneficiaire supprimé');
    }
}
