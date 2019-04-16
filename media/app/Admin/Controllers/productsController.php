<?php

namespace App\Admin\Controllers;

use App\products;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Collection;

class productsController extends Controller
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
            ->header('Index')
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
        $pic = "/storage/sfgfgfsfg.jpg";
        $grid = new Grid(new products);

        $grid->id('Id');
        $grid->categories_id('Categories id');
        $grid->title('Title');
        $grid->description('Description');
        $grid->_tags('tags')->pluck('img_path')->pluck(0)->map('ucwords')->implode('-')->image();
        $grid->price('Price');
        $grid->promo_price('Promo price');
        $grid->option_id('Option id');
        $grid->stars('Stars');
        $grid->quantity('Quantity');
        $grid->type('Type');
        $grid->disp('Disp');
        $grid->sim_id('Sim id');
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
        $show = new Show(products::findOrFail($id));

        $show->id('Id');
        $show->categories_id('Categories id');
        $show->title('Title');
        $show->description('Description');
        $show->_tags(' tags');
        $show->price('Price');
        $show->promo_price('Promo price');
        $show->option_id('Option id');
        $show->stars('Stars');
        $show->quantity('Quantity');
        $show->type('Type');
        $show->disp('Disp');
        $show->sim_id('Sim id');
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
        $form = new Form(new products);

        $form->number('categories_id', 'Categories id');
        $form->text('title', 'Title');
        $form->textarea('description', 'Description');
        $form->text('_tags', ' tags');
        $form->decimal('price', 'Price');
        $form->decimal('promo_price', 'Promo price');
        $form->number('option_id', 'Option id');
        $form->number('stars', 'Stars');
        $form->number('quantity', 'Quantity');
        $form->text('type', 'Type');
        $form->switch('disp', 'Disp');
        $form->number('sim_id', 'Sim id');

        return $form;
    }
}
