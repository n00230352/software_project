<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Book;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $communities = Community::all();
        return view('donate.create', compact('communities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'community_id' => 'required|exists:communities,id',
            'title' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'notes' => 'nullable|string|max:500',
        ]);


        $donation = Donation::create([
            'community_id' => $request->community_id,
            'notes' => $request->notes,
        ]);


        Book::create([
            'title' => $request->title,
            'condition' => $request->condition,
            'donation_id' => $donation->id,
        ]);

        return redirect()->route('donate.create')->with('success', 'Book donated successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
