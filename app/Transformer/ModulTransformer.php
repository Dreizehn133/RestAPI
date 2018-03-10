<?php namespace App\Transformer;

use League\Fractal\TransformerAbstract;

class ModulTransformer extends TransformerAbstract {

    public function transform($task) {

        return [
            'id' => $task->mod_id,
            'name' => $task->nama,
            'qty' => $task->jumlah,
            'ket'=> $task->keterangan,
            'tanggal'=> $task->created_at->format('d M Y')
        ];
    }
 }
