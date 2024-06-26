<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class bookController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();

        // if ($books->isEmpty()) {
        //     $data = [
        //         "menssage" => "no hay Libros",
        //         "status" => 200
        //     ];
        //     return response()->json($data, $data['status']);
        // }

        return $books;
    }

    public function create(Request $request)
    {
        $books = Book::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        if (!$books) {
            $data = [
                "menssage" => "fallo al crear un libro",
                "status" => 200
            ];
            return response()->json($data, $data['status']);
        }

        $data = [
            "menssage" => "Se creo un libro",
            "status" => 200
        ];
        return response()->json($data, $data['status']);
    }
}
