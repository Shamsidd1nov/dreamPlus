@extends('admin.layouts.layout')

@section('title','Admin')

@section('main')

<div class="col-sm-12 col-xl-6 w-100">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Add Post</font></font></h6>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">icon code</font></font></label>
                <input type="text" class="form-control" name="icon"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Title</font></font></label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Content</font></font></label>
                <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ADD</font></font></button>
        </form>
    </div>
</div>

@endsection