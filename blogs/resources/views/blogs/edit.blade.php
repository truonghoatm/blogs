@extends('home')
@section('title', 'Chinh sua blog')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chinh sua blog</h1></div>
            <div class="col-12">
                <form method="post" action="{{route('blogs.update', $blog->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tieu de blog</label>
                        <input type="text" class="form-control" name="title" value="{{$blog->title}}" required>
                    </div>
                    <div class="form-group">
                        <label>Noi dung blog</label>
                        <input type="text" class="form-control" name="content" value="{{$blog->content}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chinh sua</button>
                    <button type="submit" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Huy
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
