@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-evenly w-100 flex-wrap-reverse">
    <div class="mt-5 col-md-5 bg-white rounded p-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <td>Category Name</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $row)
                <tr class="text-start">
                    <td>{{$row->name}}</td>
                    <td class="d-flex gap-2 justify-content-center">
                        <a href="{{route('category.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('category.destroy', $row->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5 col-md-5 bg-white rounded p-3 px-5">
        <p>
            Create Category
        </p>

        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="mt-2">
                <label for="dataName">Name :</label>
                <input type="text" name="name" id="dataName" class="form-control">
            </div>
            <div class="mt-2">
                <input type="submit" id="dataName" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection