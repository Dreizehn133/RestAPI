<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PictureController extends Controller
{

  public function add(Request $req,$id){

      //  $nama=$req->input('user');
        $file = $req->file('picture');
        //$extension = $file->getClientOriginalExtension();
        $extension='jpg';
        $fileName = $id.'.'.$extension;
        $dest = public_path().'/'.'picture/';
        $file->move($dest,$fileName);
        return ['status'=>'ok'];
  }

  public function getPicture($id){
    //$file=public_path()."\picture\".jpg";
    $file="public/picture/".$id.".jpg";
    return response()->file($file);
  }

}
