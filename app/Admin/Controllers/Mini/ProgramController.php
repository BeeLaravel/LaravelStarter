<?php

namespace App\Admin\Controllers\Mini;

use App\Models\Mini\Program;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ProgramController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Mini Program')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Program);

        $grid->id('ID');

        $grid->slug('Slug');
        $grid->title('Title');
        $grid->logo('Logo');
        $grid->description('Description');
        $grid->share_image('Share Image');
        $grid->customer_service_wechat('Customer Service Wechat');

        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Program::findOrFail($id));

        $show->id('ID');

        $show->slug('Slug');
        $show->title('Title');
        $show->logo('Logo');
        $show->description('Description');
        $show->share_image('Share Image');
        $show->customer_service_wechat('Customer Service Wechat');

        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Program);

        $form->display('ID');

        $form->text('slug')->rules('required');
        $form->text('title')->rules('required');
        $form->image('logo');
        $form->textarea('description');
        $form->image('share_image');
        $form->text('customer_service_wechat');

        $form->display('Created at');
        $form->display('Updated at');

        return $form;
    }
}
