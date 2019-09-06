<?php
namespace App\Http\Controllers\Api\V1;

/**
 * Tacit Questions
 * 亲密度 题目
 *
 * @Resource("questions", uri="/tacit/questions")
 */
class QuestionController extends Controller {
	/**
	 * Pagination Questions
	 * 分页展示题目
	 *
	 * @Get("/")
	 * @Versions({"v1"})
	 * @Request("email=foo&password=bar", contentType="application/x-www-form-urlencoded")
	 * @Parameters({
	 *      @Parameter("page", description="The page of results to view.", default=1),
	 *      @Parameter("limit", description="The amount of results per page.", default=20)
	 * })
	 */
    public function index() {
        return [
            "message" => "hello",
        ];
    }
}
