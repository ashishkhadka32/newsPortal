<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //goto index view
        $companies = Company::first();
        return view("admin.company.index",compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create view
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //save date
        $company = new Company();
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $file = $request->logo;
        if($file)
        {
            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('images',$filename);
            $company->logo = "images/$filename";
        }
        $company->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit view
        $company = Company::find($id);
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $file = $request->logo;
        if($file)
        {
            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('images',$filename);
            $company->logo = "images/$filename";
            unlink($company->logo);
        }
        $company->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy data
        $company = Company::find($id);
        unlink($company->logo);
        $company->delete();
        return redirect()->back();
    }
}
