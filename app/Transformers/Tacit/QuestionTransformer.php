<?php
namespace App\Transformers\Tacit;

use League\Fractal\TransformerAbstract;

use App\Models\Tacit\Question as ThisTransformer;

class QuestionTransformer extends TransformerAbstract {
    // protected $availableIncludes = ['warehouse'];

    public function transform(ThisTransformer $item) {
        return [
            'id' => $item->id,

            'title' => $item->title,
            'choices' => $item->choiceArray,

            'sort' => $item->sort,
            // 'created_by' => $item->created_by,
            'created_at' => $item->created_at->diffForHumans(),
            // 'updated_at' => $item->updated_at,
            // 'deleted_at' => $item->deleted_at,
        ];
    }

    // public function includeWarehouse(ThisTransformer $item) {
    //     return $this->item($item->warehouse_id, new \App\Transformers\Warehouse\WarehouseTransformer());
    // }
}

