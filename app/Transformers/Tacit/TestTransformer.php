<?php
namespace App\Transformers\Tacit;

use League\Fractal\TransformerAbstract;

use App\Models\Tacit\Test as ThisModel;

class TestTransformer extends TransformerAbstract {
    protected $availableIncludes = ['questions', 'original', 'tests', 'creater'];

    public function transform(ThisModel $item) {
        return [
            'id' => $item->id,

            'questions' => $item->questions,
            'original' => $item->original,
            'tests' => $item->tests,
            'creater' => $item->creater,

            'created_by' => $item->created_by,
            'created_at' => $item->created_at->diffForHumans(),
            // 'updated_at' => $item->updated_at,
            // 'deleted_at' => $item->deleted_at,
        ];
    }

    public function includeQuestion(ThisModel $item) {
        return $this->item($item->questions, new \App\Transformers\Tacit\QuestionTransformer);
    }
    public function includeOriginal(ThisModel $item) {
        return $this->item($item->original, new \App\Transformers\Tacit\TestTransformer);
    }
    public function includeTest(ThisModel $item) {
        return $this->item($item->tests, new \App\Transformers\Tacit\TestTransformer);
    }
    public function includeCreater(ThisModel $item) {
        return $this->item($item->creater, new \App\Transformers\Mini\UserTransformer);
    }
}
