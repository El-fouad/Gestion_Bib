<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\book;

class BookControllerRes extends Controller
{
    
    public function index()
    {   
        $books = book::paginate(10);
        // $data = Storage::get('dataBase.json');
        // $books = json_decode($data, true);
        return view('showBooks',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        // $books = json_decode(Storage::get('dataBase.json'), true);
        // array_push($books['Books'], array(
        //     "id"=>count($books['Books'])+1,
        //     "title" => $request->input('title'),
        //     "author"=> $request->input('author'),
        //     "genre"=> $request->input('category'),
        //     "stock"=> $request->input('quantity'),
        //     "description"=> $request->input('description'),
        //     "date"=> $request->input('date'),
        //     ) );
        // file_put_contents(storage_path('app/dataBase.json'), json_encode($books));
        // dd($data);
        // dd ($data->title) ;
        $book = new book;
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->genre = $request->input('category');
        $book->stock = $request->input('quantity');
        $book->description = $request->input('description');
        $book->date = $request->input('date');
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        if (!$book){
            abort(404);
        } 
        return view('showBook',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book=book::find($id);
        return view('editBook',['book'=>$book]);
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
        //
        
        $book=book::findOrFail($id); 
        //dd($request->all());               
        $res=$request->all();                           
        $book->update($res);                        

        return redirect()->route('books.show',$book->id);     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book::destroy($id);
        return redirect()->route('books.index');
        //
    }
    public function searchByCategory(Request $request)
{
    $category = $request->input('category');
    $results = book::where('genre', $category)->paginate(10);
    return view('showBooks', ['Books' => $results]);
}
}
