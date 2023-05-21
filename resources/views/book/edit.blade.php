@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-center w-100">
    <div class="mt-5 col-md-11 bg-white rounded p-3 px-5">
        <form action="{{route('book.update', $book->id)}}" class="mx-3" enctype="multipart/form-data" method="POST">
            @csrf
            {{method_field('PUT')}}
            <div class="mt-3">
                <label for="dataBook">Name</label>
                <input type="text" name="name" class="form-control" value="{{$book->name}}">
            </div>
            <div class="mt-3">
                <label for="dataBook">Category</label>
                <select name="id_category" id="" class="form-select">
                    <option value="{{$book->category->id}}">{{$book->category->name}}--current</option>
                    @foreach($category as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3 d-flex row justify-content-start">
                <label for="dataBook">Images</label>
                <div class="mb-3">
                    <img src="{{asset('/storage/images/profile/' .$book->image)}}" class="book-img" alt="">
                </div>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection