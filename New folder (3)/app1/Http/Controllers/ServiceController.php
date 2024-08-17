<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // Display all services
    public function index()
    {
        $services = Service::all();
        return view('servicesIndex', compact('services'));
    }

    // Show the form to create a new service
    public function create()
    {
        return view('servicesCreate');
    }

    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048', // Validate image if provided
        ]);

        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $service->image = $path;
        }

        $service->save();

        return redirect()->route('servicesIndex')->with('success', 'Service added successfully!');
    }

    // Show the form to edit an existing service
    public function edit(Service $service)
    {
        return view('servicesEdit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service->title = $request->input('title');
        $service->description = $request->input('description');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }

            // Store new image
            $path = $request->file('image')->store('services', 'public');
            $service->image = $path;
        }

        $service->save();

        return redirect()->route('servicesIndex')->with('success', 'Service updated successfully!');
    }

    // Delete a service
    public function destroy(Service $service)
    {
        // Delete image if exists
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('servicesIndex')->with('success', 'Service deleted successfully!');
    }
}
