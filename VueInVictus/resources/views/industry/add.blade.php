@extends('adminlte::page')

@section('title', 'Dashboard')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
  <div class="card card-default">

    <div class="card-header">
      {{ isset($industry) ? 'Edit industry' : 'Create industry' }}
    </div>

    <div class="card-body">
     @include('partials.errors')
      <form class="" action="{{ isset($industry) ? route('update-industry',$industry->id) :  route('add-industry') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($industry))
            @method('PUT')
        @endif

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text"  class="form-control"name="title" id="title" value="{{ isset($industry) ? $industry->title : '' }}">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="5" cols="5">{{ isset($industry) ? $industry->description : '' }}</textarea>
        </div>

        {{-- <div class="form-group">
          <label for="content">Content</label>
              <input id="content" type="hidden" name="content" value="{{ isset($industry) ? $industry->content : '' }}">
              <trix-editor input="content"></trix-editor>
        </div> --}}
        @if (isset($industry))
            <div class="form-group">
            <label for="image">Current Image</label>
            <img src="{{ asset($industry->image) }}" width="100%" width="500px" alt="">
            </div>
        @endif
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" id="image" value="">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" name="button">
              {{ isset($industry) ? 'Update industry' : 'Create industry' }}
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
