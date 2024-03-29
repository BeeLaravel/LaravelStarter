<?php
namespace App\Transformers\Tacit;

use League\Fractal\TransformerAbstract;

use App\Models\Tacit\Test as ThisModel;

use App\Models\Common\Frase;
use App\Models\Tacit\TestQuestion;

class TestTransformer extends TransformerAbstract {
    protected $availableIncludes = ['creater', 'questions', 'original', 'tests'];

    public function transform(ThisModel $item) {
        $frases = Frase::where('category', 'tacit')->orderBy('sort')->pluck('content', 'slug');

        foreach ( $item->tests as $key => $value ) {
            $item->tests[$key]['creater'] = $value->creater;
        }

        if ( $item->original ) {
            $original = TestQuestion::where('test_id', $item->original->id)->pluck('answer', 'question_id');
            foreach ( $item->questions as $key => $value ) {
                $item->questions[$key]['correct'] = ($value->pivot->answer == $original[$value->id]) ? 1 : 0;
                $item->questions[$key]['original_answer'] = $original[$value->id];
            }

            $item->original['creater'] = $item->original->creater;
            // $item->original['questions'] = $item->original->questions;
        }

        return [
            'id' => $item->id,
            'unlock' => $item->unlock,

            'creater' => $item->creater,
            'questions' => $item->questions,
            'original' => $item->original,
            'tests' => $item->tests,

            'percent' => $item->percent,
            'description' => isset($item->percent) ? $frases[$item->percent] : '',

            'created_by' => $item->created_by,
            'created_at' => $item->created_at->diffForHumans(),
            // 'updated_at' => $item->updated_at,
            // 'deleted_at' => $item->deleted_at,
        ];
    }

    public function includeCreater(ThisModel $item) {
        return $this->item($item->creater, new \App\Transformers\Mini\UserTransformer);
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
}
