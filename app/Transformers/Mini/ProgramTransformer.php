<?php
namespace App\Transformers\Mini;

use League\Fractal\TransformerAbstract;

use App\Models\Mini\Program as ThisTransformer;

class ProgramTransformer extends TransformerAbstract {
    // protected $availableIncludes = ['warehouse'];

    public function transform(ThisTransformer $item) {
        return [
            'id' => $item->id,

            'title' => $item->title,
            'slug' => $item->slug,
            'logo' => $item->logo,
            'description' => $item->description,
            'share_image' => $item->share_image,
            'customer_service_wechat' => $item->customer_service_wechat,
            'ios_payment_closed' => $item->ios_payment_closed,

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

