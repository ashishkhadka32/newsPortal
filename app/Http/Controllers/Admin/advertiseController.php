<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\advertise;
use Illuminate\Http\Request;

class advertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = advertise::all();
        return view('admin.advertise.index', compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advertise = new advertise();
        $advertise->name = $request->name;
        $advertise->contact = $request->contact;
        $advertise->url = $request->url;
        $file = $request->image;
        if($file)
        {
            $filename = time().".". $file->getClientOriginalExtension();
            $file->move('images/',$filename);
            $advertise->image = "images/$filename";
        }
        $advertise->save();
        return redirect()->route('admin.advertise.create');
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
        $advertise = advertise::find($id);
        return view('admin.advertise.edit',compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $advertise = advertise::find($id);
        $advertise->name = $request->name;
        $advertise->contact = $request->contact;
        $advertise->url = $request->url;
        $file = $request->image;
        $advertise->status = $request->status;
        if($file)
        {
            $filename = time().".". $file->getClientOriginalExtension();
            $file->move('images/',$filename);
            unlink($advertise->image);
            $advertise->image = "images/$filename";
        }
        $advertise->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise = advertise::find($id);
        $advertise->delete();
        return redirect()->back();
    }
}
