<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->paginate(10);
        return view('property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'zone' => 'required',
            'type' => 'required',
            'city' => 'required',
            'price' => 'required|integer',
            'bathroom' => 'required|integer',
            'room' => 'required|integer',
            'parking' => 'required|integer',
            'phone' => 'required|integer',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);
        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $name);
        Property::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'zone' => $request->get('zone'),
            'type' => $request->get('type'),
            'city' => $request->get('city'),
            'price' => $request->get('price'),
            'bathroom' => $request->get('bathroom'),
            'room' => $request->get('room'),
            'parking' => $request->get('parking'),
            'phone' => $request->get('phone'),
            'image' => $name
        ]);
        return redirect()->back()->with('message', 'Property Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        return view('property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'zone' => 'required',
            'type' => 'required',
            'city' => 'required',
            'price' => 'required|integer',
            'bathroom' => 'required|integer',
            'room' => 'required|integer',
            'parking' => 'required|integer',
            'phone' => 'required|integer',
            'image' => 'mimes:png,jpeg,jpg',
        ]);
        $property = Property::find($id);
        $name = $property->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/image');
            $image->move($destinationPath, $name);
        }
        $property->name = $request->get('name');
        $property->description = $request->get('description');
        $property->status = $request->get('status');
        $property->zone = $request->get('zone');
        $property->type = $request->get('type');
        $property->city = $request->get('city');
        $property->price = $request->get('price');
        $property->bathroom = $request->get('bathroom');
        $property->room = $request->get('room');
        $property->parking = $request->get('parking');
        $property->phone = $request->get('phone');
        $property->price = $request->get('price');
        $property->image = $name;
        $property->save();
        return redirect()->route('property.index')->with('message', 'Property Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete($id);
        return redirect()->route('property.index')->with('message', 'Property Deleted');
    }

    public function view($id)
    {
        $property = Property::find($id);
        return view('property.detail',compact('property'));
    }


    public function listPropertyadmin()
    {
        $properties = Property::latest()->paginate(12);
        // $properties = Property::with('property')->get();
        return view('admin.index', compact('properties'));
    }

    public function listPropertyindex()
    {
        $properties = Property::latest()->paginate(12);
        // $properties = Property::with('property')->get();
        return view('backend.index', compact('properties'));
    }

    public function listPropertypropertise()
    {
        $properties = Property::orderBy('created_at')->paginate(9);
        // $properties = Property::with('property')->get();
        return view('backend.properties', compact('properties'));
    }

}
