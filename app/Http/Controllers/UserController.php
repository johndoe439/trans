<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Quote;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function welcome()
    {
        return view('welcome', [
            'shipmentTypes' => ['By Air', 'By Ship', 'By Road'],
            'incoterms' => ['EXW', 'FCA', 'FOB', 'CIF', 'DAP', 'DDP']
        ]);
    }

    public function quote()
    {
        return view('quotedetails');
    }
    public function view()
    {

        // Check if user is authenticated
        if (auth()->check()) {
            // Safely access the user's role
            $role = auth()->user()->role ?? null;

            if ($role === 'admin') {
                // Admins stay logged in and see the dashboard
                $quotes = Quote::all();
                return view('admin.dashboard', compact('quotes'), [
                    'shipmentTypes' => ['By Air', 'By Ship', 'By Road'],
                    'incoterms' => ['EXW', 'FCA', 'FOB', 'CIF', 'DAP', 'DDP']
                ]);
            } elseif ($role === 'user') {
                // Log out users and redirect to welcome
                Auth::logout();
                return redirect()->route('welcome');
            } else {
                // Handle unexpected roles (optional: log out and redirect)
                Auth::logout();
                return redirect()->route('welcome');
            }
        }

        // If not authenticated, redirect to welcome
        return redirect()->route('welcome');
    }
    public function details(Quote $quote)
    {
        return view('admin.details', compact('quote'));
    }

    public function edits(Quote $quote)
    {
        return view('admin.edit', compact('quote'));
    }







    public function store(StoreQuoteRequest $request)
    {
        $validated = $request->validated();

        // Handle image uploads
        $images = [
            'image_1' => null,
            'image_2' => null,
            'image_3' => null,
            'image_4' => null,
        ];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                if ($index < 4) { // Limit to 4 images
                    $path = $image->store('quote_images', 'public');
                    $images["image_" . ($index + 1)] = $path;
                }
            }
        }

        // Generate unique tracking ID
        $trackingId = 'SHIP-' . Str::upper(Str::random(8));

        // Remove 'images' from validated data to prevent column error
        unset($validated['images']);

        // Create quote
        $quote = Quote::create(array_merge($validated, [
            'tracking_id' => $trackingId,
            'status' => 'Pending',
            'image_1' => $images['image_1'],
            'image_2' => $images['image_2'],
            'image_3' => $images['image_3'],
            'image_4' => $images['image_4'],
        ]));

        return redirect()->route('welcome')
            ->with('success', 'Quote request submitted successfully. Tracking ID: ');
    }


    public function show(Request $request)
    {
        // Validate the tracking ID
        $request->validate([
            'tracking_id' => 'required|string|exists:quotes,tracking_id',
        ]);

        // Find the quote by tracking ID
        $quote = Quote::where('tracking_id', $request->tracking_id)->firstOrFail();

        // Pass the quote to the details view
        return view('quotedetails', compact('quote'));
    }

    public function stay(StoreQuoteRequest $request)
    {
        $validated = $request->validated();

        // Handle image uploads
        $images = [
            'image_1' => null,
            'image_2' => null,
            'image_3' => null,
            'image_4' => null,
        ];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                if ($index < 4) { // Limit to 4 images
                    $path = $image->store('quote_images', 'public');
                    $images["image_" . ($index + 1)] = $path;
                }
            }
        }

        // Generate unique tracking ID
        $trackingId = 'SHIP-' . Str::upper(Str::random(8));

        // Remove 'images' from validated data to prevent column error
        unset($validated['images']);

        // Create quote
        $quote = Quote::create(array_merge($validated, [
            'tracking_id' => $trackingId,
            'status' => 'Pending',
            'image_1' => $images['image_1'],
            'image_2' => $images['image_2'],
            'image_3' => $images['image_3'],
            'image_4' => $images['image_4'],
        ]));

        return redirect()->route('dashboard')
            ->with('success', 'Quote request submitted successfully. Tracking ID: ' . $trackingId);
    }


    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $validated = $request->validated();

        // Handle image uploads and deletions
        $images = [
            'image_1' => $quote->image_1,
            'image_2' => $quote->image_2,
            'image_3' => $quote->image_3,
            'image_4' => $quote->image_4,
        ];

        // Process image deletions
        for ($i = 1; $i <= 4; $i++) {
            if ($request->input("remove_image_$i") == '1' && $images["image_$i"]) {
                // Delete the image file from storage
                \Storage::disk('public')->delete($images["image_$i"]);
                $images["image_$i"] = null;
            }
        }

        // Handle new image uploads
        if (
            $request->hasFile('image_1') || $request->hasFile('image_2') ||
            $request->hasFile('image_3') || $request->hasFile('image_4')
        ) {
            for ($i = 1; $i <= 4; $i++) {
                if ($request->hasFile("image_$i")) {
                    // Delete old image if exists
                    if ($images["image_$i"]) {
                        \Storage::disk('public')->delete($images["image_$i"]);
                    }
                    // Store new image
                    $path = $request->file("image_$i")->store('quote_images', 'public');
                    $images["image_$i"] = $path;
                }
            }
        }

        // Update quote with validated data and images
        $quote->update(array_merge($validated, [
            'image_1' => $images['image_1'],
            'image_2' => $images['image_2'],
            'image_3' => $images['image_3'],
            'image_4' => $images['image_4'],
        ]));

        return redirect()->route('dashboard')
            ->with('success', 'Quote updated successfully. Tracking ID: ' . $quote->tracking_id);
    }

    public function delete()
    {
        // Get all quotes
        $quotes = Quote::all();

        // Delete associated images
        foreach ($quotes as $quote) {
            $images = [
                $quote->image_1,
                $quote->image_2,
                $quote->image_3,
                $quote->image_4,
            ];
            foreach ($images as $image) {
                if ($image) {
                    Storage::disk('public')->delete($image);
                }
            }
        }

        // Delete all quotes
        $count = Quote::count();
        Quote::truncate(); // Or use Quote::query()->delete() if you need soft deletes

        return redirect()->route('dashboard')
            ->with('success', "All $count quotes deleted successfully.");
    }
}
