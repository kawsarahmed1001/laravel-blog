@extends('layouts.backend')

@section('content')
<div class="justify-content-center">
    <div class="card">
        <div class="card-header">Create New Slider</div>
        <div class="card-body">
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputName">SLide Title</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="example title">
            </div>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea class="form-control" name="description" id="inputDescription" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="photo">
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
        </form>
        </div>
    </div>
</div>

@endsection