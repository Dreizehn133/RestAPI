<?php namespace App\Transformer;

use League\Fractal\TransformerAbstract;
use App\Login;
use App\Take;
use App\Modul;

class TakeTransformer extends TransformerAbstract {

    public function transform($task) {
        $usr = Login::find($task->id_user)->nama;
        $mod = Modul::find($task->mod_id)->nama;
        return [
            'kode'=>$task->id,
            'usr_id'=>$task->id_user,
            'mod_id'=>$task->mod_id,
            'oleh' => $usr,
            'modul' => $mod,
            // 'name' => $task->nama,
            'qty' => $task->jumlah,
            'ket'=> $task->keterangan,
            'tanggal'=> $task->created_at->format('D, d F Y - H:i:s')
        ];
    }
 }
