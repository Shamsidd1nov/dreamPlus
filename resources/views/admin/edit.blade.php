@extends('admin.layouts.layout')

@section('title','Admin')

@section('main')


    <form action="{{ url('admin/' .$posts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$posts->id}}" />
        <label>icon</label></br>
        <input type="text" style="background-color: rgb(255, 255, 255);" name="icon" id="name" value="{{$posts->icon}}" class="form-control"></br>
        <label>title</label></br>
        <input type="text" style="background-color: rgb(255, 255, 255);" name="title" id="address" value="{{$posts->title}}" class="form-control"></br>
        <label>content</label></br>
        <input type="text" style="background-color: rgb(255, 255, 255);" name="content" id="mobile" value="{{$posts->content}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>

@endsection