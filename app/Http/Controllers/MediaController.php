<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function create()
    {
        $medias = []; // Initialize an empty array or fetch the data from the correct table
        // $medias = Media::all(); // This line is causing the error because the 'media' table doesn't exist
        return view('media.create', compact('medias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validasi jenis file dan ukuran maksimal
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $mime = $file->getMimeType();

        $file->storeAs('public/uploads', $fileName); // Simpan file di folder public/uploads

        Media::create([
            'name' => $fileName,
            'file' => $fileName,
            'extension' => $extension,
            'size' => $size,
            'mime' => $mime,
        ]);

        return redirect()->back()->with('message', 'File uploaded successfully.');
    }
}
