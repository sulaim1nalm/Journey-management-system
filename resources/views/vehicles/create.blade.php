@extends('layouts.app')

@section('title', 'Add Vehicle')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add New Vehicle</h4>
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

        <form action="{{ route('vehicles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="VehiclePlateNo" class="form-label">Plate Number</label>
                <input type="text" name="VehiclePlateNo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="VehicleModel" class="form-label">Model</label>
                <input type="text" name="VehicleModel" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
