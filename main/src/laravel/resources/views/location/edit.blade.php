@extends('layouts.app')

@section('title', 'Edit ' . $location->name)

@section('content')
    <div class="row">
        <div class="col s9">
        <span class="card-title">
            Edit {{ $location->name }}
        </span>
        </div>
    </div>
    <hr/>
    <br/>
    <div class="row">
        <form class="col s12" action="/location/{{ $location->id }}/edit" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input id="name" name="name" type="text" value="{{ $location->name }}" required>
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="address" name="address" type="text" value="{{ $location->address }}" required>
                    <label for="address">Address</label>
                </div>
            </div>
            <div class="align-right">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Edit
                </button>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
@endsection