@extends('layouts.app')

@section('content')
<div class="pt-5 d-flex justify-content-evenly w-100 flex-wrap-reverse">
    <div class="mt-5 col-md-5 bg-white rounded p-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $row)
                <tr class="text-start">
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5 col-md-5 bg-white rounded p-3 px-5">
        <p>
            Create User
        </p>

        <form action="{{route('user.store')}}" method="POST">
            @csrf
            <div class="mt-2">
                <label for="dataName">Name :</label>
                <input type="text" name="name" id="dataName" class="form-control">
            </div>
            <div class="mt-2">
                <label for="dataName">Email :</label>
                <input type="email" name="email" id="dataName" class="form-control">
            </div>
            <div class="mt-2">
                <label for="dataName">Password :</label>
                <input type="password" name="password" id="dataName" class="form-control">
            </div>
            <div class="mt-2">
                <input type="submit" id="dataName" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection