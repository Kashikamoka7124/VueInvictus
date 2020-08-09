@extends('adminlte::page')

@section('title', 'Dashboard')

{{-- @section('content_header')
    <h1>Dashboard</h1>
@stop --}}

@section('content')
  <div class="card card-default">

    <div class="card-header">
      {{ isset($review) ? 'Edit review' : 'Create review' }}
    </div>

    <div class="card-body">
     @include('partials.errors')
      <form class="" action="{{ isset($review) ? route('update-review',$review->id) :  route('add-review') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($review))
            @method('PUT')
        @endif

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text"  class="form-control" name="name" id="name" value="{{ isset($review) ? $review->name : '' }}">
        </div>

        <div class="form-group">
          <label for="review">Review</label>
          <textarea name="review" id="review" class="form-control" rows="5" cols="5">{{ isset($review) ? $review->review : '' }}</textarea>
        </div>

        {{-- <div class="form-group">
          <label for="content">Content</label>
              <input id="content" type="hidden" name="content" value="{{ isset($review) ? $review->content : '' }}">
              <trix-editor input="content"></trix-editor>
        </div> --}}
        @if (isset($review))
            <div class="form-group">
            <label for="image">Current Image</label>
            <img src="{{ asset($review->image) }}" width="100%" width="500px" alt="">
            </div>
        @endif
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" id="image" value="">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" name="button">
              {{ isset($review) ? 'Update review' : 'Create review' }}
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
