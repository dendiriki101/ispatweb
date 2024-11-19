<?php

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class EnglishController extends Controller
{
    // ... kode lain dalam controller

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required'],
            'slug' => ['required', 'unique:englishes'],
            'content' => ['required']
        ];

        $this->validate($request, $rules);

        // Pemanggilan fungsi uploadFileAttachment jika ada file attachment
        $contentWithImages = $this->uploadFileAttachment($request->content);

        $article = English::create([
            'title' => $request->title,
            'name' => auth()->user()->name,
            'slug' => $request->slug,
            'content' => $contentWithImages
        ]);

        return redirect('/admin/english');
    }

    // ... kode lain dalam controller

    /**
     * Fungsi untuk mengelola file attachment dalam content.
     * Fungsi ini menggunakan editor Trix dengan asumsi bahwa
     * file attachment akan diunggah ke penyimpanan awan (cloud storage).
     */
    protected function uploadFileAttachment($content)
    {
        $images = collect(json_decode($content, true)['attachments'] ?? [])
            ->filter(function ($attachment) {
                return $attachment['type'] === 'file';
            });

        $images->each(function ($image) {
            $dataURL = $image['content'];
            $src = $this->uploadImageToStorage($dataURL);

            // Mengganti 'content' dengan URL penyimpanan
            $image['content'] = $src;
        });

        // Mengembalikan konten yang telah diperbarui dengan URL gambar yang sesuai
        return json_encode(['document' => compact('content')]);
    }

    /**
     * Fungsi untuk mengunggah gambar ke penyimpanan lokal atau awan.
     */
    protected function uploadImageToStorage($dataURL)
    {
        // Mengambil base64 data dari URL gambar
        $base64_str = substr($dataURL, strpos($dataURL, ',') + 1);
        $image_data = base64_decode($base64_str);

        // Menyimpan gambar ke penyimpanan lokal atau awan
        $path = Storage::put('file/content', $image_data);

        // Mengembalikan URL penyimpanan
        return asset($path);
    }

    // ... kode lain dalam controller
}
