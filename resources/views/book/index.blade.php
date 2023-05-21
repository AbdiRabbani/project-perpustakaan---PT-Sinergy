@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-center w-100">
    <div class="mt-5 col-md-11 bg-white rounded p-3 px-5">
        <div class="w-100 d-flex justify-content-between">
            <p>
                Book List
            </p>
            <a href="{{route('book.create')}}" class="btn btn-success">
                Add Book
            </a>
        </div>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <td>
                        Image
                    </td>
                    <td>
                        Book Name
                    </td>
                    <td>
                        category
                    </td>
                    <td class="text-center">
                        Action
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $row)
                <tr class="text-start">
                    <td>
                        <img src="{{asset('/storage/images/profile/' .$row->image)}}" class="book-img" alt="">
                    </td>
                    <td>
                        {{$row->name}}
                    </td>
                    <td>
                        {{$row->category->name}}
                    </td>
                    <td class="d-flex gap-1 justify-content-center">
                        <form action="{{route('book.destroy', $row->id)}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{route('book.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
