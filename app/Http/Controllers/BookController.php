<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Category;
use App\Book;
use App\Borrow;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('book.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $dataBook = [
            'name' => $data['name'],
            'description' => $data['description'],
            'id_category' => $data['id_category'],
        ];

        $validator = Validator::make($dataBook,[
                'image' => 'required|image|mimes:jpeg,jpg,png|max:10240'
            ]);

            $destination_path = 'public/images/profile';
            $image = $request -> file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $dataBook['image'] = $image_name;

        Book::create($dataBook);
        return redirect('/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $borrow = Borrow::Where('id_user', Auth()->user()->id)->get()->all();
        $borrowed = Borrow::Where('id_book', $id)->get()->all();
        $book = Book::find($id);
        return view('book.detail', compact('book', 'borrow', 'borrowed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $category = Category::all();
        return view('book.edit', compact('book', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request -> all();
        $book = Book::find($id);
        $dataBook = [
            'name' => $data['name'],
            'description' => $data['description'],
            'id_category' => $data['id_category'],
        ];

        $validator = Validator::make($dataBook,[
                'image' => 'required|image|mimes:jpeg,jpg,png|max:10240'
            ]);

        if($request->hasFile('image')) {
            $destination_path = 'public/images/profile';
            $image = $request -> file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $dataBook['image'] = $image_name;
        }
            

        $book->update($dataBook);
        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Book::find($id);

        $data->delete();
        return redirect('/book');
    }
}
