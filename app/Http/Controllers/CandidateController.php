<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    function CandidateProfileCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'photo' => 'required|string',
                'father_name' => 'string',
                'mother_name' => 'string',
                'date_of_birth' => 'required|date',
                'gender' => 'string',
                'blood_group' => 'string',
                'gov_id' => 'required|numeric',
                'emergency_phone' => 'string|numeric',
                'address' => 'required|string',
                'bio' => 'string',
            ]);

            $candidate = CandidateProfile::where('user_id',Auth::id())->first();
            if ($candidate) {
                return response()->json(['status' => 'fail', 'message' => 'Candidate Profile Already Created']);
            }

            CandidateProfile::create([
                'photo' => $request->input('photo'),
                'father_name' => $request->input('father_name'),
                'mother_name' => $request->input('mother_name'),
                'date_of_birth' => $request->input('date_of_birth'),
                'gender' => $request->input('gender'),
                'blood_group' => $request->input('blood_group'),
                'gov_id' => $request->input('gov_id'),
                'emergency_phone' => $request->input('emergency_phone'),
                'address' => $request->input('address'),
                'bio' => $request->input('bio'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Profile Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateProfile(Request $request): JsonResponse
    {
        $candidate = CandidateProfile::where('user_id',Auth::id())->first();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }

    function CandidateProfileUpdate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'photo' => 'required|string',
                'father_name' => 'string',
                'mother_name' => 'string',
                'date_of_birth' => 'required|date',
                'gender' => 'string',
                'blood_group' => 'string',
                'gov_id' => 'required|numeric',
                'emergency_phone' => 'string|numeric',
                'address' => 'required|string',
                'bio' => 'string',
            ]);

            CandidateProfile::where('user_id',Auth::id())->update([
                'photo' => $request->input('photo'),
                'father_name' => $request->input('father_name'),
                'mother_name' => $request->input('mother_name'),
                'date_of_birth' => $request->input('date_of_birth'),
                'gender' => $request->input('gender'),
                'blood_group' => $request->input('blood_group'),
                'gov_id' => $request->input('gov_id'),
                'emergency_phone' => $request->input('emergency_phone'),
                'address' => $request->input('address'),
                'bio' => $request->input('bio'),
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Profile Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }

    }
}
