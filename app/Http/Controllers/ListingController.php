<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

use Illuminate\View\FileViewFinder;

class ListingController extends Controller
{
    // show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('Listings.show', [
            'listing' => $listing,
        ]);
    }

    // show create form
    public function create() {
        return view('listings.create');
    }

    // Store listing data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }
}
