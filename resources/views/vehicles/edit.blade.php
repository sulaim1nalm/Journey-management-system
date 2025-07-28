@extends('layouts.app')

@section('title', 'Edit Vehicle')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Vehicle</h4>
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="VehiclePlateNo" class="form-label">Plate Number</label>
                <input type="text" name="VehiclePlateNo" value="{{ $vehicle->VehiclePlateNo }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="VehicleModel" class="form-label">Model</label>
                <input type="text" name="VehicleModel" value="{{ $vehicle->VehicleModel }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
