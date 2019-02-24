@extends('home')
@section('title','Danh sach blog')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh sach blog</h1></div>
            <div class="col-12">
                @if(Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('success')}}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ten blog</th>
                    <th scope="col">Noi dung blog</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($blogs) == 0)
                    <tr>
                        <td colspan="4">Khong co du lieu</td>
                    </tr>
                @else
                    @foreach($blogs as $key => $blog)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->content}}</td>
                            <td><a href="{{route('blogs.edit',$blog->id)}}">sua</a></td>
                            <td><a href="{{route('blogs.destroy', $blog->id)}}" class="text-danger"
                                   onclick="return confirm('Ban chac chan muon xoa?')">xoa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('blogs.create')}}">Them moi</a>
        </div>
    </div>
@endsection