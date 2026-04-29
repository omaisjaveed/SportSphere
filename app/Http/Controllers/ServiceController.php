<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName);
            $data['image_url'] = 'public/uploads/services/' . $imageName;
        }

        Service::create($data);

        return redirect()->route('service')->with('success', 'Service has been added');
    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
    $service = Service::findOrFail($id);
    
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);
    
    $data = $request->all();
    
    // Image upload handling
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($service->image_url && file_exists(public_path($service->image_url))) {
            unlink(public_path($service->image_url));
        }
    
        // Upload new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/services'), $imageName);
        $data['image_url'] = 'uploads/services/' . $imageName;
    }
    
    $service->update($data);
    
    return redirect()->route('service')->with('success', 'Service has been updated');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect('/admin/service')->with('success', 'Service has been deleted');
    }

    public static function getAllProducts()
    {
        $services = Service::all();
        return $services;
    }
}
