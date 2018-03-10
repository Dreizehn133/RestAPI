<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Take;
use App\Transformer\TakeTransformer;

class TakeController extends Controller
{

 protected $respose;

 public function __construct(Response $response)
 {
     $this->response = $response;
 }

 public function daftarPengambilan()
 {
    $isi = Take::orderBy('id','desc')->paginate(10);
    return $this->response->withPaginator($isi,new TakeTransformer());
 }

 public function byID($id)
 {
   $isi = Take::where('id_user','=',$id)->orderBy('created_at','desc')->get();

   return $this->response->withCollection($isi,new TakeTransformer());
 }

 public function insertPengambilan(Request $request)
 {
    $isi = new Take;
    $isi->id_user = $request->input('usr_id');
    $isi->mod_id = $request->input('mod_id');
    $isi->jumlah = $request->input('qty');
    $isi->keterangan = $request->input('ket');
    if($isi->save()){
      return ['status'=>'ok'];
    }else {
      return ['status'=>'gagal'];
    }
 }

 public function hapusPengambilan($id)
 {
   $isi = Take::find($id);
   if($isi->delete()){
     return ['status'=>'ok'];
   }else{
     return ['status'=>'gagal'];
   }
 }
 // public function search($id)
 // {
 //   $isi=Take::where('')
 // }

}
