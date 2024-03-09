<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function showUploadForm()
    {
        $uploadedFiles = File::all();
        return view('upload', compact('uploadedFiles'));
    }
    public function upl()
    {
        $uploadedFiles = File::all();
        return view('upl', compact('uploadedFiles'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048', // Hanya menerima file PDF dengan maksimum 2MB
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/uploads', $fileName); // Simpan file ke folder 'public/uploads' dengan nama file yang diubah

            // Simpan informasi file ke dalam database
            $newFile = new File();
            $newFile->name = $fileName;
            $newFile->path = $filePath;
            $newFile->save();
        }

        return redirect()->route('upload.form')->with('success', 'File berhasil diunggah.');
    }

    public function delete($id)
    {
        $file = File::find($id);

        if (!$file) {
            return redirect()->route('upload.form')->with('error', 'File tidak ditemukan.');
        }

        $file->delete();

        return redirect()->route('upload.form')->with('success', 'File berhasil dihapus.');
    }
    
    public function showValidation($id)
    {
        // Lakukan pengambilan data berdasarkan ID yang diberikan
        $uploadedFiles = File::where('user_id', $id)->get();

        // Kirim data ke tampilan
        return view('validation', compact('uploadedFiles'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $uploadedFiles = File::where('name', 'like', '%'.$search.'%')->get();
    
        if ($uploadedFiles->isEmpty()) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        return view('upl', compact('uploadedFiles'));
    }
    

}
