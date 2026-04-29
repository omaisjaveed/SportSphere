<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Testimonials = Testimonials::all()->sortByDesc("id");
        return view('backend.testimonials.list')->with(['Testimonials' => $Testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $Testimonials = new Testimonials();
        $Testimonials->title = $request->input('title');
        $Testimonials->date = $request->input('date');
        $Testimonials->description = $request->input('description');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/Testimonials', $imageName);

            // Image ka full path generate karein
            $imagePath = 'images/Testimonials/' . $imageName;

            // Image ka path model mein save karein
            $Testimonials->image = $imagePath;
        }
        // Save the data
        $Testimonials->save();

        // Redirect to a specific route after saving data
        return redirect()->route('testimonials.index');
    }
    public function edit($id)
    {
        $Testimonials = Testimonials::find($id);
        return view('backend.testimonials.edit', compact('Testimonials'));
    }

    public function update(Request $request, $id)
    {
        $Testimonials = Testimonials::find($id);

        $Testimonials->title = $request->input('title');
        $Testimonials->date = $request->input('date');
        $Testimonials->description = $request->input('description');

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($Testimonials->image) {
                // Use public_path() to get the absolute path
                $oldImagePath = public_path($Testimonials->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload and save the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/Testimonials', $imageName);

            // Image path to save in the database
            $imagePath = 'images/Testimonials/' . $imageName;

            $Testimonials->image = $imagePath;
        }

        $Testimonials->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonials updated successfully');
    }
    public function delete(Testimonials $Testimonials)
    {
        $Testimonials->delete();

        return redirect()->back()->with('success', 'Testimonials deleted successfully');
    }


    public static function getData()
    {
        $Testimonials = Testimonials::all()->sortByDesc("id");
        return $Testimonials;
    }
    public function testimonials_detail($id)
    {
        $Testimonials = Testimonials::find($id);
        return view("backend.testimonials_detail", ['testimonials' => $Testimonials]);
    }
}
