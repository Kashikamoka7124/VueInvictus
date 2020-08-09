@extends('adminlte::page')

@section('title', 'Data')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
  <div class="card card-default">

    <div class="card-header">
     Edit Home Page Content
    </div>

    <div class="card-body">
     @include('partials.errors')
      <form class="" action="{{route('update-data',$data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="clients">Happy Clients</label>
          <input type="number"  class="form-control" name="clients" id="clients" value="{{$data->clients }}">
        </div>
        <div class="form-group">
          <label for="affiliations">Affiliations</label>
          <input type="number"  class="form-control" name="affiliations" id="affiliations" value="{{$data->affiliations }}">
        </div>
        <div class="form-group">
          <label for="cups">Cups of Coffee</label>
          <input type="number"  class="form-control" name="cups" id="cups" value="{{$data->cups }}">
        </div>
        <div class="form-group">
          <label for="projects">Projects Completed</label>
          <input type="number"  class="form-control" name="projects" id="projects" value="{{$data->projects }}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" name="button">
              Update data
          </button>
        </div>

      </form>

    </div>
  </div>
@stop

@section('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css"> --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script> --}}
    <script> console.log('Hi!'); </script>
@stop
