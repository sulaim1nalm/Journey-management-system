@extends('layouts.app')

@section('title', 'Add Reason')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add New Reason</h4>
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reasons.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="reasonTitle" class="form-label">Reason Title</label>
                <input type="text" name="reasonTitle" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
