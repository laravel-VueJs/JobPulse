<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\BlogPage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPage(){
        return view('pages.frontend.blog');
    }

    public function BlogPageRead(){
        return BlogPage::first();
    }

    public function BlogPageUpdate(Request $request): JsonResponse
    {
        $blogPage = BlogPage::first();
        $blogPage->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'Blog Page Updated Successfully']);
    }
}
