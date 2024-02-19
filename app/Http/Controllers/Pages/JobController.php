<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\JobPage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobPage(){
        return view('pages.frontend.job');
    }

    public function JobPageRead(){
        return JobPage::first();
    }

    public function JobPageUpdate(Request $request): JsonResponse
    {
        $jobPage = JobPage::first();
        $jobPage->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'Job Page Updated Successfully']);
    }

}
