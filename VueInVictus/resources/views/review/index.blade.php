@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Industries</h1>
@stop

@section('content')
  <a href="{{route('create-review')}}" type="button" style="float:right;" class="btn mb-3 btn-success">Add Review</a>
  @if($reviews->count() > 0)

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Review</th>
        <th scope="col">Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($reviews as $review)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$review->name}}</td>
        @php
          $content = substr($review->review, 0,  40)
        @endphp
        <td>{!!$content  !!}
        </td>
        <td>
          <img src="{{asset($review->image)}}" width="120px" height="80px" alt="nothig found">
        </td>
        <td>
          <a href="{{ route('edit-review',$review->id) }}" class="btn btn-info btn-sm">Edit</a>
        </td>
        <td>
            <form class="" action="{{route('delete-review',$review->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
              Delete
              </button>
            </form>
        </td>
      </tr>
      @php
        $i++;
      @endphp
    @endforeach
    </tbody>
  </table>
@else
<h3 class="text-center"> NO REVIEWS YET</h3>
@endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
