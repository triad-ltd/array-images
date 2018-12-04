<?php
namespace TriadLtd\ArrayImages\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrayImagesController extends Controller
{
    public function index(Request $request)
    {
        return "array images by triadltd (forked from halimtuhu)";
    }

    public function upload(Request $request)
    {
        $image = Storage::putFile('/', $request->file('image'));

        $url = env('APP_URL');
        $file = str_replace($url, '', Storage::url($image));

        $data = [
            'name' => $image,
            'url' => $file,
        ];

        return $data;
    }

    public function delete($image)
    {
        Storage::delete($image);

        return "success";
    }
}
