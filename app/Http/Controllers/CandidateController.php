<?php

namespace App\Http\Controllers;

use App\Models\CandidateProfile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Training;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Candidate Profile
    |--------------------------------------------------------------------------
    | Candidate Profile Create/Update
    | Candidate Profile
    */
    function CandidateProfileCreateUpdate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'photo' => 'string',
                'father_name' => 'string',
                'mother_name' => 'string',
                'date_of_birth' => 'required|date',
                'gender' => 'string',
                'blood_group' => 'string',
                'gov_id' => 'required|numeric',
                'emergency_phone' => 'string|numeric',
                'address' => 'required|string',
                'bio' => 'string'
            ]);

            $candidate = CandidateProfile::where('user_id',Auth::id())->first();
            if ($candidate) {
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
                    'user_id' => Auth::id(),
                ]);
                return response()->json(['status' => 'success', 'message' => 'Candidate Profile Updated Successfully']);
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

    function CandidateProfileInfo(){
        return User::with('candidateProfile', 'training', 'education', 'experience')->where('id',Auth::id())->first();
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



    /*
    |--------------------------------------------------------------------------
    | Candidate Experience
    |--------------------------------------------------------------------------
    | Candidate Experience Profile Create
    | Candidate Experience Profile
    | Candidate Experience Profile Update
    | Candidate Experience Profile Delete
    */

    function CandidateExperienceProfileCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'company_name' => 'required|string',
                'department' => 'required|string',
                'join' => 'required|date',
                'resign' => 'date',
                'is_currently_working' => 'boolean',
                'company_address' => 'required|string',
                'responsibilities' => 'required|string',
            ]);

            Experience::create([
                'company_name' => $request->input('company_name'),
                'department' => $request->input('department'),
                'join' => $request->input('join'),
                'resign' => $request->input('resign'),
                'is_currently_working' => $request->input('is_currently_working'),
                'company_address' => $request->input('company_address'),
                'responsibilities' => $request->input('responsibilities'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Experience Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateExperienceProfile(Request $request): JsonResponse
    {
        $candidate = Experience::where('user_id', Auth::id())->get();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }

    function CandidateExperienceProfileUpdate(Request $request, $id): JsonResponse
    {
        try {
            $request->validate([
                'company_name' => 'required|string',
                'department' => 'required|string',
                'join' => 'required|date',
                'resign' => 'date',
                'is_currently_working' => 'boolean',
                'company_address' => 'required|string',
                'responsibilities' => 'required|string',
            ]);

            // if not found the id then return error
            if (!Experience::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Experience Not Found']);
            }

            Experience::where('id', $id)->update([
                'company_name' => $request->input('company_name'),
                'department' => $request->input('department'),
                'join' => $request->input('join'),
                'resign' => $request->input('resign'),
                'is_currently_working' => $request->input('is_currently_working'),
                'company_address' => $request->input('company_address'),
                'responsibilities' => $request->input('responsibilities'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Experience Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateExperienceProfileDelete($id): JsonResponse
    {
        try {
            // if not found the id then return error
            if (!Experience::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Experience Not Found']);
            }

            Experience::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Candidate Experience Deleted Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }









}
