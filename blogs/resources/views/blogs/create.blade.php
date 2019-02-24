@extends('home')
@section('title', 'Them moi blog')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Them moi blog</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('blogs.store') }}">
                @csrf
                <div class="form-group">
                    <label>Tên blog</label>
                    <input type="text" class="form-control" name="title"  placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputConten">Content</label>
                    <input type="text" class="form-control" name="content" placeholder="Enter content" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection