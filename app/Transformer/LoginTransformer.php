<?php namespace App\Transformer;

use League\Fractal\TransformerAbstract;

class LoginTransformer extends TransformerAbstract {

    public function transform($task) {

        return [
            'user' => $task->id_usr,
            'name' => $task->nama,
            'username' => $task->username,
            'kontak'=> $task->telp,
            'ket' =>$task->status,
            'tanggal'=> $task->created_at->format('d M Y')
        ];
    }
 }
