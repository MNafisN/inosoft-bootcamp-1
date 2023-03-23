<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertItemRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Item;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Nafis';
        echo "Hello World";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Item.insertItem');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Book()
    {
        $bookModel = new Book();

        $books = $bookModel->get();

        foreach ($books as $book)
        {
            echo "nama buku : " .$book->nama_buku.'<br>';
            echo "deskripsi buku : " .$book->deskripsi.'<br>';
            echo "harga buku : " .$book->harga.'<br>';
        }
    }

    public function Insert(InsertItemRequest $request)
    {
        $post = $request->all();

        // $validator = Validator::make($post, [
        //     'item_name'=>'required|max:15',
        //     'item_type'=>'required|max:10',
        //     'item_price'=>'required|numeric',
        //     'item_desc'=>'required'
        // ]);

        // if ($validator->fails()) {
        //     return \response()->json($validator->errors()->getMessages());
        // }

        $insertItem = [
            'item_name'=>$post['item_name'],
            'item_type'=>$post['item_type'],
            'item_price'=>$post['item_price'],
            'item_desc'=>$post['item_desc']
        ];

        $item = Item::create($insertItem);
        $item->save();

        return redirect()->route('Item');
    }
}
