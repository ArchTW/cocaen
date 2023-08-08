<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Category;
// use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Auth\Database\Administrator;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->filter(function ($filter) {
            $filter->like('author.name', 'Author');
            $filter->like('category.name', 'Category');
            $filter->like('created_at', 'Created at');
            $filter->like('updated_at', 'Updated at');
            // 您可以根據您的需求添加其他搜尋條件
            $filter->where(function ($query) {
                $input = $this->input;
                $query->orWhere('title', 'like', "%$input%")
                    ->orWhere('subtitle', 'like', "%$input%")
                    ->orWhere('cover', 'like', "%$input%")
                    ->orWhere('content', 'like', "%$input%");
            }, 'ALL');
        });

        $grid->column('id', __('Id'))->sortable();
        // $grid->column('author_id', __('Author id'))->sortable();
        $grid->column('author.name', __('Author'));
        // $grid->column('category_id', __('Category id'))->sortable();
        $grid->column('category.name', __('Category'))->sortable();
        $grid->column('title', __('Title'));
        $grid->column('subtitle', __('Subtitle'));
        $grid->column('cover', __('Cover'));
        $grid->column('content', __('Content'));
        $grid->column('views', __('Views'))->sortable();
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('author_id', __('Author id'));
        $show->field('category_id', __('Category id'));
        $show->field('title', __('Title'));
        $show->field('subtitle', __('Subtitle'));
        $show->field('cover', __('Cover'));
        $show->field('content', __('Content'));
        $show->field('views', __('Views'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article());

        // $form->number('author_id', __('Author id'))->rules('required');
        $authors = Administrator::all()->pluck('name', 'id')->toArray();
        $form->select('author_id', __('Author'))->options($authors)->rules('required');

        // 使用 Category 模型獲取所有分類記錄並建立選項列表
        $categories = Category::all()->pluck('name', 'id')->toArray();
        $form->select('category_id', __('Category'))->options($categories)->rules('required');

        $form->text('title', __('Title'))->rules('required');
        $form->text('subtitle', __('Subtitle'));
        $form->ckeditor('cover', __('Cover'))->rules('required');
        $form->ckeditor('content', __('Content'))->rules('required');
        $form->number('views', __('Views'))->default(0);

        return $form;
    }
}