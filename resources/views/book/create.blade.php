@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-center w-100">
    <div class="mt-5 col-md-11 bg-white rounded p-3 px-5">
        <form action="{{route('book.store')}}" class="mx-3" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mt-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mt-3">
                <label>Category</label>
                <select name="id_category" id="" class="form-select">
                    @foreach($category as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label>Images</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="mt-3">
                <label>Desctiption</label>
                <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
            </div>
            <div class="mt-3">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
