@extends('layouts.app')

@section('content')
<div class="pt-5 w-100 bg-white">
    <div class="mt-2">
        <img src="{{asset('/storage/images/profile/' .$book->image)}}" class="img-thumbnaill rounded-bottom" alt="">
        <div class="mt-2">
            <div class="detail-header d-flex justify-content-between flex-wrap mt-5">
                <div class="col-md-3 text-center img-side" height="50px">
                    <img src="{{asset('/storage/images/profile/' .$book->image)}}" class="img-main" alt="">
                </div>
                <p class="h2 col-md-6">{{$book->name}}</p>
                <p class="h6 col-md-3 text-center">{{$book->category->name}}</p>
            </div>
            <div class="col-md-12 px-5 mt-5 pt-5">
                @if($borrow)
                @foreach($borrowed as $row)
                <div class="alert alert-warning" role="alert">
                    You has borrow this book until {{$row->end_date}}
                </div>
                @endforeach
                @endif
                <p class=" h2">
                    Description
                </p>
                <p class="h6 text-justify">
                    {{$book->description}}
                </p>
                <div class="mt-5">
                    <form action="{{route('borrow.store')}}" method="post">
                        @csrf
                        <input type="number" value="{{Auth::user()->id}}" name="id_user" hidden>
                        <input type="number" value="{{$book->id}}" name="id_book" hidden>
                        <div class="mb-5 d-flex col-md-10 gap-5">
                            <div>
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" class="form-control" id="start-date">
                            </div>
                            <div>
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" class="form-control" id="end-date">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            @if($borrow)
                            <button type="submit" class="btn btn-success" disabled>Take</button>
                            @else
                            <button type="submit" class="btn btn-success">Take</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
