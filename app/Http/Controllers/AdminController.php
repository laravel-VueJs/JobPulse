<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.admin.index');
    }

    public function companyPage()
    {
        return view('pages.dashboard.admin.company');
    }

    public function jobPage()
    {
        return view('pages.dashboard.admin.job');
    }

    public function employeePage()
    {
        return view('pages.dashboard.admin.employee');
    }

    public function blogPage()
    {
        return view('pages.dashboard.admin.blog');
    }

    public function blogCategoryPage()
    {
        return view('pages.dashboard.admin.blog-category');
    }

    public function adminPage()
    {
        return view('pages.dashboard.admin.frontendPage.summary');
    }

    public function homePageEdit()
    {
        return view('pages.dashboard.admin.frontendPage.home');
    }

    public function aboutPageEdit()
    {
        return view('pages.dashboard.admin.frontendPage.about');
    }

    public function jobPageEdit()
    {
        return view('pages.dashboard.admin.frontendPage.job');
    }

    public function blogPageEdit()
    {
        return view('pages.dashboard.admin.frontendPage.blog');
    }

    public function contactPageEdit()
    {
        return view('pages.dashboard.admin.frontendPage.contact');
    }

    public function pluginPage()
    {
        return view('pages.dashboard.admin.plugin');
    }
}
