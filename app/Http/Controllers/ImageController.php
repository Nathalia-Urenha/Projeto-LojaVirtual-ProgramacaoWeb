<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

//imagecontroller
class ImageController extends Controller
{
    public function _construct(){

    }

    public function store(Request $request){

        if ($request->hasFile('image')){

            if ($request->id){
                $usuario = User::find($request->id);
                $foto = $usuario->profile_pic;
                Storage::delete('img/normal/'.$foto);
                Storage::delete('img/thumbnail/'.'_small_'.$foto);  
            }

            $filenamewithextension = $request->image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $smallthumbnail = '_small_'.$filename.'_'.time().'.'.$extension;
            
            $request->image->storeAs('img/normal/', $filenametostore);
            $request->image->storeAs('img/thumbnail/', $smallthumbnail);

            $smallthumbnailpath = public_path('storage/img/thumbnail/'.$smallthumbnail);
            
            $this->createThumbnail($smallthumbnailpath,150,93);
    
            return response()->json(array('nomeArquivo'=>$filenametostore));
        } else {
            return response()->json(array('nomeArquivo' => 'boy.png'));
        }
            
    }

    public function createThumbnail($path, $width, $height){
        $img = Image::make($path)->resize($width, $height, function($constraint){
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    public function getImages($imagem){
        return Image::make(file_get_contents('file://'.storage_path('/app/public/img/normal/'.$imagem)))->response();
    }

    public function getThumbnails($imagem){
        return Image::make(file_get_contents('file://'.storage_path('/app/public/img/thumbnail/'.'_small_'.$imagem)))->response();
    }

    public function excluir(Request $request){
        $foto = $request->get('image');
        Storage::delete('img/normal/'.$foto);
        Storage::delete('img/thumbnail/'.'_small_'.$foto);
        return response()->json(array('nomeArquivo'=>'boy.png')); 
    }
}
