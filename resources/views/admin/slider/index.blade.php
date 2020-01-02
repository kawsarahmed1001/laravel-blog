@extends('layouts.backend')


@section('content')
<div class="justify-content-center">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                SLider List
            </div>
            <div class="float-right">
                <a href="{{route('slider.create')}}" class="btn btn-primary btn-fw">CREATE NEW</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Slide Title</th>
                        <th>Description</th>
                        <th>Silde Image</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                            <td>{{ @$slide->name }}</td>
                            <td>{{ @$slide->description }}</td>
                            <td>
                                <img src="{{ @$slide->image_url }}" style="width: 100px; border-radius: 0;"/>
                            </td>
                            <td>
                                <div class="dropdown text-right">
                                    <div class="float-right">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Action </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -186px, 0px);">
                                            <a class="dropdown-item"  href="{{route('slider.edit', $slide->id)}}" >Edit</a>
                                            @php
                                                $id = uniqid() ;
                                            @endphp
                                            <a class="dropdown-item" href="{{route('slider.destroy', $slide->id)}}" onclick="event.preventDefault();
                                                                document.getElementById('{{$id}}').submit();">
                                                Delete<i class="dropdown-item-icon ti-power-off"></i>
                                            </a>

                                            <form id="{{ $id }}" action="{{route('slider.destroy', $slide->id)}}" method="POST" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection