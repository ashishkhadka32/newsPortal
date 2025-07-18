<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\emailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;
        $category->save();

        $data =[
            "subject" => "Change category status request",
            "message" => "New category has been added. Please review and change the status of category.",
        ];

        $admins = User::all();//mail to all admins which are registered

        Mail::to($admins)->send(new emailNotification($data));//mail from email notification. data will send to emailNotification

        return redirect()->route("admin.category.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $category = Category::find($id);
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;
        $category->status = $request->status;
        $category->update();
        return redirect()->route("admin.category.index");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
