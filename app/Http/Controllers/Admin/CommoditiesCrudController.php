<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommoditiesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommoditiesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommoditiesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Commodities::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/commodities');
        CRUD::setEntityNameStrings('Komoditas', 'Komoditas');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->enableBulkActions();
        $this->crud->addButtonFromView('top', 'arrange_images', 'beginning');
       // CRUD::setFromDb(); // set columns from db columns.
       CRUD::column('commodity')->type('text')->label('Komoditas');
       CRUD::column('unit')->type('text')->label('Unit');
       CRUD::column('image')->type('image')->label('Gambar')->disk('public');
       CRUD::column([
        'name'     => 'user_id',
        'label'    => 'User',
        'type'     => 'custom_html',
        'value' => function($entry) {
            // Check if the user relationship is loaded
            if ($entry->user) {
                // Display the user's name in a Bootstrap badge
                return '<span class="badge badge-primary">'.$entry->user->name.'</span>';
            }
            return '<span class="badge badge-secondary">No User</span>';
        }
        ]);

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CommoditiesRequest::class);
        //CRUD::setFromDb(); // set fields from db columns.

        CRUD::field('user_id')->type('hidden')->value(Auth::user()->id);
        CRUD::field('commodity')->type('text')->label('Komoditas');
        CRUD::field('unit')->type('text')->label('Unit');
        CRUD::field([
            'label' => 'Gambar',
            'name' => 'image',
            'type' => 'image',
           // 'crop' => true, // set to true to allow cropping, false to disable
           // 'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
        ]);
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function arrangeImages()
    {
        $commodities = \App\Models\Commodities::orderBy('position')->get(); // Order by position
        return view('admin.commodities.arrange_images', compact('commodities'));
    }

    public function saveImageOrder(CommoditiesRequest $request)
    {
        $order = $request->input('order');

        foreach ($order as $index => $commodityId) {
            $commodity = \App\Models\Commodities::find($commodityId);
            $commodity->position = $index + 1; // Update position based on the order in the array
            $commodity->save();
        }

        return response()->json(['success' => true]);
    }

}
