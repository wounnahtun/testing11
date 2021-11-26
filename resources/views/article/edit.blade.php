@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('article.update',$article->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="col-8 my-3">
                        <label for="" class="form-label">Article Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title',$article->title)}}">
                    </div>
                    <div class="col-8 my-3">
                        <select name="category" id="" class="form-select">
                            @foreach(\App\Models\Category::all() as $c)
                                <option value="{{$c->id}}"{{$c->id == $article->category_id?"selected":""}} >{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-8 my-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="10" rows="5" class="form-control">{{$article->description}}</textarea>
                    </div>
                    <div class="col-8 my-3">
                        <button class="btn btn-outline-primary float-end">Click</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
