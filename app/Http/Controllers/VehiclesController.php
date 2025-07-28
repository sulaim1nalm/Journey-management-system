<?php

namespace App\Http\Controllers;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
  
    public function index()
    {
        $vehicles = Vehicles::all();
        return view('vehicles.index', compact('vehicles'));
    }


    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'VehiclePlateNo' => 'required|string|max:255',
            'VehicleModel'=> 'required|string|max:20',
        ]);
        
        Vehicles::create($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle added.');
    }

    public function edit($id)
    {
         $vehicle = Vehicles::findOrFail($id); 
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'VehiclePlateNo' => 'required|string|max:10',
            'VehicleModel'=> 'required|string|max:20',
        ]);
         $vehicle = Vehicles::findOrFail($id); 
        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated.');
    }

    public function destroy($id)
    {    
        $vehicle = Vehicles::findOrFail($id); 
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted.');
    }
}
