<?php
namespace App\Transformers\Mini;

use League\Fractal\TransformerAbstract;

use App\Models\Mini\User as ThisTransformer;

class UserTransformer extends TransformerAbstract {
    // protected $availableIncludes = ['warehouse'];

    public function transform(ThisTransformer $item) {
        return [
            'id' => $item->id,

            'openid' => $item->openid,
            'nickName' => $item->nickName,
            'avatarUrl' => $item->avatarUrl,
            'language' => $item->language,
            'gender' => $item->gender,
            'country' => $item->country,
            'province' => $item->province,
            'city' => $item->city,

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

