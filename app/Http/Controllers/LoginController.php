<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Login;
use App\Transformer\LoginTransformer;

class LoginController extends Controller
{

 protected $respose;

 public function __construct(Response $response)
 {
     $this->response = $response;
 }

 public function userLogin(Request $request)
 {
      $isi = new Login;
      $user = $request->input('username');
      $pass = $request->input('password');

      $kondisi = ['username'=>$user,'password'=>$pass];
      $isi = Login::where($kondisi)->first();

      if(!$isi){
        return ['status'=>'error'];
      }else{
        return $this->response->withItem($isi,new LoginTransformer());
        //return $isi;
      }
 }

 public function daftarUser()
 {
      $isi= Login::paginate(10);
      //return $isi;
      return $this->response->withPaginator($isi,new LoginTransformer());
 }

 public function insertUser(Request $request)
 {

      $isi = new Login;
      //$isi->id_usr=$request->input('id_usr');
      $isi->nama=$request->input('name');
      $isi->username=$request->input('username');
      //$isi->password=bcrypt($request->input('password'));
      $isi->password=$request->input('password');
      $isi->telp=$request->input('kontak');
      $isi->status=$request->input('ket');
      if($isi->save()){
        return ['status'=>'ok'];
      }else {
        return ['status'=>'gagal'];
      }
 }

 public function hapusUser($id)
 {
    $isi=Login::find($id);
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
