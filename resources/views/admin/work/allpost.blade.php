@extends('admin.layouts.layout')

@section('title','Admin')

@section('main')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">image</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
            <tr>
                <td>#{{$post->id}}</td>
                <td>{{$post->image}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><a href="{{ url('/admin/work/' . $post->id . '/edit') }}" title="Edit Student"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a></td>
                <td>
                <form method="POST" action="{{ url('/admin/work' . '/' . $post->id) }}">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
                </td>
            </tr>
      @endforeach      
    </tbody>
  </table>

@endsection