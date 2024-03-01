<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\Education;
use App\Models\Training;
use App\Models\User;
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


    /*
    |--------------------------------------------------------------------------
    | Candidate Education
    |--------------------------------------------------------------------------
    | Candidate Education Profile Create/Update
    | Candidate Education Profile
    */

    function CandidateEducationProfileCreateUpdate(Request $request): JsonResponse
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

            $education = Education::where('user_id',Auth::id())->first();
            if ($education) {
                Education::where('user_id',Auth::id())->update([
                    'level' => $request->input('level'),
                    'degree_name' => $request->input('degree_name'),
                    'major' => $request->input('major'),
                    'institute_name' => $request->input('institute_name'),
                    'result' => $request->input('result'),
                    'passing_year' => $request->input('passing_year'),
                    'user_id' => Auth::id(),
                ]);
                return response()->json(['status' => 'success', 'message' => 'Candidate Education Updated Successfully']);
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



    /*
    |--------------------------------------------------------------------------
    | Candidate Training
    |--------------------------------------------------------------------------
    | Candidate Training Profile Create/Update
    | Candidate Training Profile
    */
    function CandidateTrainingProfileCreateUpdate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'institute' => 'required|string',
                'completion_year' => 'required|date_format:Y',
            ]);

            $training = Training::where('user_id',Auth::id())->first();
            if ($training) {
                Training::where('user_id',Auth::id())->update([
                    'title' => $request->input('title'),
                    'institute' => $request->input('institute'),
                    'completion_year' => $request->input('completion_year'),
                    'user_id' => Auth::id(),
                ]);
                return response()->json(['status' => 'success', 'message' => 'Candidate Training Updated Successfully']);
            }

            Training::create([
                'title' => $request->input('title'),
                'institute' => $request->input('institute'),
                'completion_year' => $request->input('completion_year'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Training Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateTrainingProfile(Request $request): JsonResponse
    {
        $candidate = Training::join('candidate_profiles', 'trainings.user_id', '=', 'candidate_profiles.user_id')
            ->where('trainings.user_id', Auth::id())
            ->select('candidate_profiles.*', 'trainings.*')
            ->first();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }







}
