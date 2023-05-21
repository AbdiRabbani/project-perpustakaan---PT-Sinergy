@extends('layouts.app')

@section('content')
@if(Auth::user()->level == "admin")
<div class="books">
    <div class="books-header">
        <p>
            borrowed book
        </p>
    </div>

    <div class="books-content mb-4">
        <div>
            <div class="logo l-a"></div>
            <div class="books-text">
                <p>
                    All Book
                </p>
                <h2>
                    {{$book->count()}} Book
                </h2>
            </div>
        </div>
        <div>
            <div class="logo l-b"></div>
            <div class="books-text">
                <p>
                    Borrowed
                </p>
                <h2>
                    {{$borrow->count()}} Book
                </h2>
            </div>
        </div>
        <div>
            <div class="logo l-c"></div>
            <div class="books-text ">
                <p>
                    Total user 
                </p>
                <h2>
                    {{$user->count()}}
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="section-group">
    <div class="chart">
        <p>books Chart</p>
        <div class="chart-content">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <div class="quality">
        <p>Book Quality</p>
        <div class="chart-content">
            <canvas id="qualityChart"></canvas>
        </div>
    </div>

    <div class="borrower table-responsive">
        <p>borrower</p>
        <table class="borrower-list table">
            <thead>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        Borrowed Book
                    </td>
                    <td>
                        Duration
                    </td>
                    <td>
                        Cover
                    </td>
                    <td>
                        Status
                    </td>
                </tr>
            </thead>
            <tbody id="tbody">
                @foreach($borrow as $row)
                <tr>
                    <td>
                        {{$row->user->name}}
                    </td>
                    <td>{{$row->book->name}}</td>
                    <td>
                        {{$row->start_date}} until {{$row->end_date}}
                    </td>
                    <td>
                        <div>
                            <img src="{{asset('/storage/images/profile/' .$row->book->image)}}" class="img-borrow"
                                alt="">
                        </div>
                    </td>
                    <td>
                        <form action="{{route('borrow.destroy', $row->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button class="btn btn-success">returned</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
@include('dashboard.index')
@endif
@endsection
