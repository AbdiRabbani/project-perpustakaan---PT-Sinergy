<div class="pt-5 w-100 container">
    <div class="mt-5 d-flex flex-wrap gap-3">
        @foreach($book as $row)
        <a class="card card-book" href="{{route('book.show', $row->id)}}" style="width: 18rem;">
            <img src="{{asset('/storage/images/profile/' .$row->image)}}" class="card-img-top home-book-img" alt="">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <p class="card-text">{{$row->name}}</p>
                    <p class="card-text">{{$row->category->name}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
