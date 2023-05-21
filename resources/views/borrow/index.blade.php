@extends('layouts.app')

@section('content')
<div class="pt-5 w-100 container">
    <div class="mt-5 d-flex flex-wrap gap-3">
        @foreach($borrow as $row)
        <a class="card card-book" href="{{route('book.show', $row->book->id)}}" style="width: 18rem;">
            <img src="{{asset('/storage/images/profile/' .$row->book->image)}}" class="card-img-top home-book-img" alt="">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="card-text">{{$row->book->name}}</p>
                    <p class="card-text">{{$row->book->category->name}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection