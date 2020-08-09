@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog Posts</h1>
@stop

@section('content')
  <a href="{{route('create-post')}}" type="button" style="float:right;" class="btn mb-3 btn-success">Add Post</a>
  @if($posts->count() > 0)

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($posts as $post)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{$post->title}}</td>
        @php
          $content = substr($post->description, 0,  40)
        @endphp
        <td>{!!$content  !!}
        </td>
        <td>
          <img src="{{asset($post->image)}}" width="120px" height="80px" alt="nothig found">
        </td>
        <td>
          <a href="{{ route('edit-post',$post->id) }}" class="btn btn-info btn-sm">Edit</a>
        </td>
        <td>
            <form class="" action="{{route('delete-post',$post->id)}}" method="POST">
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
<h3 class="text-center"> NO POSTS YET</h3>
@endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
