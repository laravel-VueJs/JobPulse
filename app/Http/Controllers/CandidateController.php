<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\Education;
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


    /*
     function CandidateEducationProfileCreate(Request $request){
        return Education::create($request->input());
    }
    */

    function CandidateEducationProfileCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'level' => 'required|string',
                'degree_name' => 'required|string',
                'major' => 'required|string',
                'institute_name' => 'required|string',
                'result' => 'required|string',
                'passing_year' => 'required|date_format:Y',
            ]);

            $candidate = Education::where('user_id',Auth::id())->first();
            if ($candidate) {
                return response()->json(['status' => 'fail', 'message' => 'Education Profile Already Created']);
            }

            Education::create([
                'level' => $request->input('level'),
                'degree_name' => $request->input('degree_name'),
                'major' => $request->input('major'),
                'institute_name' => $request->input('institute_name'),
                'result' => $request->input('result'),
                'passing_year' => $request->input('passing_year'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Education Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateEducationProfile(Request $request): JsonResponse
    {
        $candidate = Education::join('candidate_profiles', 'educations.user_id', '=', 'candidate_profiles.user_id')
            ->where('educations.user_id', Auth::id())
            ->select('educations.*', 'candidate_profiles.*')
            ->first();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }

    function CandidateEducationProfileUpdate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'level' => 'required|string',
                'degree_name' => 'required|string',
                'major' => 'required|string',
                'institute_name' => 'required|string',
                'result' => 'required|string',
                'passing_year' => 'required|date_format:Y',
            ]);

            Education::where('user_id',Auth::id())->update([
                'level' => $request->input('level'),
                'degree_name' => $request->input('degree_name'),
                'major' => $request->input('major'),
                'institute_name' => $request->input('institute_name'),
                'result' => $request->input('result'),
                'passing_year' => $request->input('passing_year'),
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Education Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }







}