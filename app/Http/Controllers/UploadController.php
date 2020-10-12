<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('testUpload');
    }

    public function upload(Request $request)
    {
        // TODO Замуьть валидацию
        //php artisan storage:link
        // http://know-online.com/post/laravel-upload-file

        // загрузка файла
        if ($request->isMethod('post') && $request->file('userfile')) {

            $request->validate([

                // файл должен быть картинкой (jpeg, png, bmp, gif, svg или webp)
//                'userfile' => 'application',

                // поддерживаемые MIME файла (image/jpeg, image/png)
                'userfile' => 'mimetypes:application/pdf,image/jpeg',

            ]);

            $file = $request->file('userfile');
            $upload_folder = 'public/folder';
            $filename = $file->getClientOriginalName(); // image.jpg

            Storage::putFileAs($upload_folder, $file, $filename);

        }
    }

    public function upload2(Request $request)
    {

//        $request->validate([
//            'filename' => 'mimetypes:application/pdf'
//        ]);

        $upload_folder = 'public/avatars';
        $file = $request->file('filename');
        $newFileName = '123.pdf';
//Загрузка файла на сервер
        $path = Storage::putFile($upload_folder, $file);
//Скачивание файла с сервера
        Storage::download($path, $newFileName);
//Путь для открытия файла
        $link = Storage::url($path);

        return $link;
    }
}
