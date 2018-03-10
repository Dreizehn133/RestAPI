<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Modul;
use App\Transformer\ModulTransformer;

class ModulController extends Controller
{

 protected $respose;

 public function __construct(Response $response)
 {
     $this->response = $response;
 }

 public function daftarModul()
 {
    $isi = Modul::orderBy('created_at','desc')->paginate(10);
    return $this->response->withPaginator($isi,new ModulTransformer());
 }

 public function insertModul(Request $request)
 {
   if ($request->isMethod('put')) {
         $isi = Modul::find($request->input('id'));

         if (!$isi) {
             return $this->response->errorNotFound('Tidak di temukan');
         }

     } else {
         $isi = new Modul;
     }
    //$isi = new Modul;
    $isi->mod_id=$request->input('id');
    $isi->nama=$request->input('name');
    $isi->jumlah=$request->input('qty');
    $isi->keterangan=$request->input('ket');
    if($isi->save()){
      return ['status'=>'ok'];
    }else {
      return ['status'=>'gagal'];
    }
 }

 public function hapusModul($id)
 {
    $isi=Modul::find($id);
    if(!$isi){
      return ['status'=>'Tidak di Temukan'];
    }
    if($isi->delete()){
      return ['status'=>'ok'];
    }else{
      return ['status'=>'gagal'];
    }
 }





}
