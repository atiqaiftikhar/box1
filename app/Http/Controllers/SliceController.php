<?php

namespace App\Http\Controllers;

use App\Models\Slice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SliceController extends Controller
{
    // function store(Request $request)
    // {
    //     dd($request->all());
    //     // Validate the incoming request data
    //     $request->validate([
    //         'type' => 'required|array',
    //         'text' => 'required|array',
    //         'value' => 'required|array',
    //         'chance' => 'required|array',
    //         'image' => 'required|array',
    //         'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file types
    //     ]);

    //     // Loop through the submitted data and store each row in the database
    //     foreach ($request->type as $key => $value) {
    //         $slice = new Slice();
    //         $slice->type = $request->type[$key];
    //         $slice->text = $request->text[$key];
    //         $slice->value = $request->value[$key];
    //         $slice->chance = $request->chance[$key];
    //         // Handle image upload if provided
    //         if ($request->hasFile('image') && $request->file('image')[$key]->isValid()) {
    //             $imagePath = $request->file('image')[$key]->store('images', 'public');
    //             $slice->image = $imagePath;
    //         }


    //         $slice->save();
    //     }

    //     return redirect()->back()->with('success', 'Slices added successfully!');
    // }
    public function store(Request $request)
{
    try {
        // Validate the incoming request data
        $request->validate([
            'type' => 'required|array',
            'text' => 'required|array',
            'value' => 'required|array',
            'chance' => 'required|array',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file types
        ]);

        // Loop through the submitted data and store each row in the database
        foreach ($request->type as $key => $value) {
            $slice = new Slice();
            $slice->type = $request->type[$key];
            $slice->text = $request->text[$key];
            $slice->value = $request->value[$key];
            $slice->chance = $request->chance[$key];

            // Handle image upload if provided
            if ($request->hasFile('image') && $request->file('image')[$key]->isValid()) {
                $imagePath = $request->file('image')[$key]->store('images', 'public');
                $slice->image = $imagePath;
            }

            $slice->save();
        }

        return redirect()->back()->with('success', 'Slices added successfully!');
    } catch (\Exception $e) {
        Log::error('Error storing slices: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while storing slices. Please try again.');
    }
}
}
