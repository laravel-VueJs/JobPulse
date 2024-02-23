<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutPageRead()
    {
        return AboutPage::first();
    }

    public function AboutPageUpdate(Request $request): JsonResponse
    {
        $aboutPage = AboutPage::first();
        $aboutPage->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'About Page Updated Successfully']);
    }
}
