<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePageRead()
    {
        return HomePage::first();
    }

    public function HomePageUpdate(Request $request): JsonResponse
    {
        $homePage = HomePage::first();
        $homePage->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'Home Page Updated Successfully']);
    }
}
