@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <label for="" class="form-label">Category Name</label>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-outline-primary">Click</button>
                        </div>
                    </div>

                </form>
    @include('category.list')
@endsection

