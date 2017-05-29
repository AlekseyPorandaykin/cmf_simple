<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Отображаем начальную страницу
     */
    public function index()
    {
        $pages = Page::get();
        return view("admin-page.pages.index", ["pages" => $pages]);
    }

    public function newPage()
    {
        return view("admin-page.pages.add");
    }

    public function addPage(Request $request){
        $requestData = $request->all();
        $validateData = [
            'name' => 'required|max:255',
        ];
        if (!empty($requestData["alias"]))
        {
            $validateData['alias'] = 'alpha_dash';
        }
        else {
            $requestData["alias"] = \Slug::make($requestData["name"]);
        }
        if (!empty($requestData["linked_products"]) && $requestData["linked_products"] == "on")
        {
            $requestData["linked_products"] = 1;
        }
        $this->validate($request, $validateData);
        Page::create($requestData);

        return redirect('/admin/pages');
    }

    public function  editPage(Request $request, Page $page)
    {

    }

    public function  deletePage(Request $request, $page)
    {
        Page::deletePage($page);
        return redirect('/admin/pages');
    }
}
