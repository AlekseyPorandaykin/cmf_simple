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
        $data = $this->checkDatePage($request);
        Page::create($data);

        return redirect('/admin/pages');
    }

    public function  editPage($page)
    {
        $page = Page::find($page);
        return view("admin-page.pages.update", ["page" => $page]);
    }

    public function  updatePage(Request $request, $id)
    {
        $data = $this->checkDatePage($request);
        Page::find($id)->update($data);

        return redirect('/admin/pages');
    }

    public function  deletePage(Request $request, $page)
    {
        Page::deletePage($page);
        return redirect('/admin/pages');
    }
    public function checkDatePage($request){
        $result = [];
        $requestData = $request->all();
        $validateData = [
            'name' => 'required|max:255',
        ];
        if (!empty($requestData["alias"]))
        {
            $validateData['alias'] = 'alpha_dash';
        }
        else {
            $result["alias"] = \Slug::make($requestData["name"]);
        }
        if (!empty($requestData["linked_products"]) && $requestData["linked_products"] == "on")
        {
            $result["linked_products"] = 1;
        }
        $result["name"] = trim($requestData["name"]);
        $result["active"] =  $requestData["active"];
        if (!empty($requestData["text"])){
            $result["text"] = trim($requestData["text"]);
        }
        $this->validate($request, $validateData);
        return $result;
    }
}
