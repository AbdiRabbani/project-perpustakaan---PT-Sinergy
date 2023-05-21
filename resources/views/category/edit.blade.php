@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-evenly w-100 flex-wrap-reverse">
    <div class="mt-5 col-md-5 bg-white rounded p-3 px-5">
        <p>
            Edit Category
        </p>

        <form action="{{route('category.update', $category->id)}}" method="POST">
            @csrf
            {{methoD_field('PUT')}}
            <div class="mt-2">
                <label for="dataName">Name :</label>
                <input type="text" name="name" id="dataName" class="form-control" value="{{$category->name}}">
            </div>
            <div class="mt-2">
                <input type="submit" id="dataName" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection