<?php
namespace App\Api\V1\Tacit;

use Illuminate\Http\Request;
use App\Http\Requests\Tacit\TestRequest as ThisRequest;
use App\Models\Tacit\Test as ThisModel;
use App\Transformers\Tacit\TestTransformer as ThisTransformer;

class TestController extends Controller { // Tacit Question
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index(Request $request, $parent_id=0) {
        $order_column = $request->query('order_column', 'created_at');
        $order_direction = $request->query('order_direction', 'desc');
        $page = $request->query('page', 1);
        $per_page = $request->query('per_page', 20);
        // $filter = $request->query('filter', "");
        $created_by = $request->query('created_by', "");
        $type = $request->query('type', 'all'); // all own reply

        $items = new ThisModel;

        // if ( $filter ) $items = $items->where(function($query) use ($filter){
        //     $filter = '%'.$filter.'%';

        //     return $query->where('title', 'like', $filter)
        //         ->orWhere('choices', 'like', $filter);
        // });
        if ( $created_by ) $items = $items->where('created_by', $created_by);
        switch ( $type ) {
            case 'own':
                $items = $items->where('test_id', 0);
            break;
            case 'reply':
                $items = $items->where('test_id', '<>', 0);
            break;
            default:
            break;
        }

        $items = $items
            ->orderBy($order_column, $order_direction)
            ->orderBy('id', 'desc')
            ->paginate($per_page);

        return $this->response->paginator($items, new ThisTransformer);
    }
    public function show($id) {
        $item = ThisModel::findOrFail($id);

        return $this->response->item($item, new ThisTransformer);
    }
    public function store(ThisRequest $request) {
        $item = ThisModel::create($request->all());

        return [
            'result' => $item,
        ];
    }
    public function update(ThisRequest $request, $id) {
        $item = ThisModel::findOrFail($id);
        $result = $item->update($request->all());
        return [
            'result' => $result,
        ];
    }
    public function destroy($id) {
        $item = ThisModel::findOrFail($id);

        $result = $item->delete();

        return [
            'result' => $result,
        ];
    }
}
