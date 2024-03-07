<?php

namespace App\Http\Controllers;

use App\Models\CandidateOtherInformation;
use App\Models\CandidateProfile;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Training;
use App\Models\User;
use App\Models\UserSocialAccounts;
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
    | Candidate Profile Info
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
        return User::with('candidateProfile', 'education', 'training', 'experience', 'CandidateOtherInformation', 'UserSocialAccounts')->where('id',Auth::id())->first();
    }



    /*
    |--------------------------------------------------------------------------
    | Candidate Education
    |--------------------------------------------------------------------------
    | Candidate Education Create
    | Candidate Education Profile
    | Candidate Education Update
    | Candidate Education Delete
    */

    function CandidateEducationCreate(Request $request): JsonResponse
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
        $education = Education::where('user_id', Auth::id())->get();
        return response()->json(['status' => 'success', 'data' => $education]);
    }

    function CandidateEducationUpdate(Request $request, $id): JsonResponse
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

            // if not found the id then return error
            if (!Education::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Education Not Found']);
            }

            Education::where('id', $id)->update([
                'level' => $request->input('level'),
                'degree_name' => $request->input('degree_name'),
                'major' => $request->input('major'),
                'institute_name' => $request->input('institute_name'),
                'result' => $request->input('result'),
                'passing_year' => $request->input('passing_year'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Education Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateEducationDelete($id): JsonResponse
    {
        try {
            // if not found the id then return error
            if (!Education::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Education Not Found']);
            }

            Education::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Candidate Education Deleted Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



    /*
    |--------------------------------------------------------------------------
    | Candidate Training
    |--------------------------------------------------------------------------
    | Candidate Training Create
    | Candidate Training Profile
    | Candidate Training Update
    | Candidate Training Delete
    */

    function CandidateTrainingCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'institute' => 'required|string',
                'completion_year' => 'required|date_format:Y',
            ]);

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
        $training = Training::where('user_id', Auth::id())->get();
        return response()->json(['status' => 'success', 'data' => $training]);
    }

    function CandidateTrainingUpdate(Request $request, $id): JsonResponse
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'institute' => 'required|string',
                'completion_year' => 'required|date_format:Y',
            ]);

            // if not found the id then return error
            if (!Training::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Training Not Found']);
            }

            Training::where('id', $id)->update([
                'title' => $request->input('title'),
                'institute' => $request->input('institute'),
                'completion_year' => $request->input('completion_year'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Training Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateTrainingDelete($id): JsonResponse
    {
        try {
            // if not found the id then return error
            if (!Training::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Training Not Found']);
            }

            Training::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Candidate Training Deleted Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



    /*
    |--------------------------------------------------------------------------
    | Candidate Experience
    |--------------------------------------------------------------------------
    | Candidate Experience Create
    | Candidate Experience Profile
    | Candidate Experience Update
    | Candidate Experience Delete
    */

    function CandidateExperienceCreate(Request $request): JsonResponse
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

    function CandidateExperienceUpdate(Request $request, $id): JsonResponse
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

    function CandidateExperienceDelete($id): JsonResponse
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



    /*
    |--------------------------------------------------------------------------
    | Candidate Other Information
    |--------------------------------------------------------------------------
    | Candidate Other Information Create/Update
    | Candidate Other Information Profile
    */

    function CandidateOtherInformationCreateUpdate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'current_salary' => 'numeric',
                'expected_salary' => 'numeric'
            ]);

            $candidate = CandidateOtherInformation::where('user_id',Auth::id())->first();
            if ($candidate) {
                CandidateOtherInformation::where('user_id',Auth::id())->update([
                    'current_salary' => $request->input('current_salary'),
                    'expected_salary' => $request->input('expected_salary'),
                    'user_id' => Auth::id()
                ]);
                return response()->json(['status' => 'success', 'message' => 'Updated Successfully']);
            }

            CandidateOtherInformation::create([
                'current_salary' => $request->input('current_salary'),
                'expected_salary' => $request->input('expected_salary'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateOtherInformationProfile(Request $request): JsonResponse
    {
        $candidate = CandidateOtherInformation::where('user_id', Auth::id())->first();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }



    /*
    |--------------------------------------------------------------------------
    | Candidate Social Link
    |--------------------------------------------------------------------------
    | Candidate Social Link Create
    | Candidate Social Link Profile
    | Candidate Social Link Update
    | Candidate Social Link Delete
    */

    function CandidateSocialLinkCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'title' => 'string',
                'url' => 'string'
            ]);

            UserSocialAccounts::create([
                'title' => $request->input('title'),
                'url' => $request->input('url'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Social Link Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateSocialLinkProfile(Request $request): JsonResponse
    {
        $candidate = UserSocialAccounts::where('user_id', Auth::id())->get();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }

    function CandidateSocialLinkUpdate(Request $request, $id): JsonResponse
    {
        try {
            $request->validate([
                'title' => 'string',
                'url' => 'string'
            ]);

            // if not found the id then return error
            if (!UserSocialAccounts::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Social Link Not Found']);
            }

            UserSocialAccounts::where('id', $id)->update([
                'title' => $request->input('title'),
                'url' => $request->input('url'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Candidate Social Link Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateSocialLinkDelete($id): JsonResponse
    {
        try {
            // if not found the id then return error
            if (!UserSocialAccounts::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Social Link Not Found']);
            }

            UserSocialAccounts::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Candidate Social Link Deleted Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



    /*
    |--------------------------------------------------------------------------
    | Candidate Skill
    |--------------------------------------------------------------------------
    | Candidate Skill Create
    | Candidate Skill Profile
    | Candidate Skill Update
    | Candidate Skill Delete
    */

    function CandidateSkillCreate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'name' => 'required|string'
            ]);

            Skill::create([
                'name' => $request->input('name'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Skill Created Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateSkillProfile(): JsonResponse
    {
        $candidate = Skill::where('user_id', Auth::id())->get();
        return response()->json(['status' => 'success', 'data' => $candidate]);
    }

    function CandidateSkillUpdate(Request $request, $id): JsonResponse
    {
        try {
            $request->validate([
                'name' => 'required|string'
            ]);

            // if not found the id then return error
            if (!Skill::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Skill Not Found']);
            }

            Skill::where('id', $id)->update([
                'name' => $request->input('name'),
                'user_id' => Auth::id()
            ]);
            return response()->json(['status' => 'success', 'message' => 'Skill Updated Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CandidateSkillDelete($id): JsonResponse
    {
        try {
            // if not found the id then return error
            if (!Skill::where('id', $id)->exists()) {
                return response()->json(['status' => 'fail', 'message' => 'Skill Not Found']);
            }

            Skill::where('id', $id)->delete();
            return response()->json(['status' => 'success', 'message' => 'Skill Deleted Successfully']);
        }
        catch (Exception $e) {
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }



}
