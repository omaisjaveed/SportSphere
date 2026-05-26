@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="py-5 d-flex justify-content-between  align-items-center">
            <h2>Our Services</h2>
            <ol class="align-items-center breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard') }}">Home</a></li>
                <li class="mr-5  breadcrumb-item active">Service</li>
                <a href="{{ url('/admin/services/create') }}" class="btn btn-primary"><i
                        class="fa fa-plus-circle"></i>Add Service</a>
            </ol>
        </div>
        <!--<a href="{{ url('services/create') }}" class="btn btn-primary">Add Service</a>-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td class="w-50">{!! $service->description !!}</td>
                        <td><img 
            src="{{ Str::startsWith($service->image_url, 'public/') ? url($service->image_url) : url('public/' . $service->image_url) }}" 
            alt="{{ $service->name }}" 
                                style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ url('admin/service/edit', $service->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('backend.services.destroy', $service->id) }}" method="POST"
                                style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection