@extends('layouts.app')

@section('title', 'Edit Reason')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Reason</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('reasons.update', $reason->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Reason Title</label>
                <input type="text" name="reasonTitle" value="{{ $reason->reasonTitle }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('reasons.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
