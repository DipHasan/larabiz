@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/listings/{{$listing->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name"> Enter your name</label>
                            <input type="text" name="name" class="form-control" id="name"  placeholder="Enter name" value="{{$listing->name}}">
                        </div>

                        <div class="form-group">
                            <label for="address"> Enter your address</label>
                            <input type="text" name="address" class="form-control" id="address"  placeholder="Enter address" value="{{$listing->address}}">
                        </div>

                        <div class="form-group">
                            <label for="website"> Enter your website</label>
                            <input type="text" name="website" class="form-control" id="website"  placeholder="Enter website" value="{{$listing->website}}">
                        </div>

                        <div class="form-group">
                            <label for="email"> Enter your email</label>
                            <input type="email" name="email" class="form-control" id="email"  placeholder="Enter email" value="{{$listing->email}}">
                        </div>

                        <div class="form-group">
                            <label for="phone"> Enter your phone</label>
                            <input type="number" name="phone" class="form-control" id="phone"  placeholder="Enter phone" value="{{$listing->phone}}">
                        </div>


                        <div class="form-group">
                            <label for="bio"> Enter your bio</label>
                            <input type="text" name="bio" class="form-control" id="bio"  placeholder="Enter bio" value="{{$listing->bio}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection







