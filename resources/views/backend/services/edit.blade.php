@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2>Edit Service</h2>
    <form action="{{ route('backend.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control summernote" id="description"
                name="description">{{ $service->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Service Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($service->image_url)
                <img src="{{ Str::startsWith($service->image_url, 'public/') ? url($service->image_url) : url('public/' . $service->image_url) }}" alt="{{ $service->name }}" 
                    style="max-width: 100px; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Service</button>
    </form>
</div>
@endsection