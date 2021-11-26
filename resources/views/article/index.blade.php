@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($articles as $article)
                    <div class="card my-3">
                        <div class="card-header">
                            <p class="badge bg-primary"> {{$article->category->title}}</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{Str::words($article->description,30)}}</p>
                            <a href="{{route('article.show',$article->id)}}" class="btn btn-outline-primary">See More ...</a>
                            <a href="{{route('article.edit',$article->id)}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('article.destroy',$article->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
