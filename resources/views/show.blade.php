@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$listing->name}}<span class="float-right"><a href="/" class="btn btn-secondary">Go Back</a></span></div>

            <div class="card-body">
                <div class="list-group">
                    <div class="list-group-item">
                       Address: {{$listing->address}}
                    </div>
                    
                    <div class="list-group-item">
                       Website: <a href="{{$listing->website}}">{{$listing->website}}</a> 
                    </div>
                    
                    <div class="list-group-item">
                       Email: <a href="mailto:{{$listing->email}}?subject=The%20subject%20of%20the%20mail" target="_top">{{$listing->email}}</a> 
                    </div>
                    
                    <div class="list-group-item">
                       Phone: {{$listing->Phone}}
                    </div>
                    
                    <div class="list-group-item">
                       Bio: {{$listing->bio}}
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection