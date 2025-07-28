<?php

namespace App\Http\Controllers;
use App\Models\Reason;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $reasons = Reason::all();
        return view('reasons.index', compact('reasons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reasons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reasonTitle' => 'required|string|max:255',
        ]);

        Reason::create($request->all());
        return redirect()->route('reasons.index')->with('success', 'Reason added.');
    }


    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Reason $reason)
    {
        return view('reasons.edit', compact('reason'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reason $reason)
    {
        $request->validate([
            'reasonTitle' => 'required|string|max:255',
        ]);

        $reason->update($request->all());
        return redirect()->route('reasons.index')->with('success', 'Reason updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Reason $reason)
    {
        $reason->delete();
        return redirect()->route('reasons.index')->with('success', 'Reason deleted.');
    }
}