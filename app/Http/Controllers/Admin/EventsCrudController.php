<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;
/**
 * Class EventsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Events::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/events');
        CRUD::setEntityNameStrings('events', 'events');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
       // CRUD::setFromDb(); // set columns from db columns.
       $this->crud->enableBulkActions();
       CRUD::column('title')
       ->type('text')
       ->label('Judul');
       CRUD::column([
        'name'     => 'start_date',
        'label'    => 'Waktu Pelaksanaan',
        'type'     => 'custom_html',
        'value' => function($entry) {
                $start = date('j F Y', strtotime($entry->start_date));
                $end = date('j F Y', strtotime($entry->end_date));
                return $start.' - '.$end;
            }
        ]);
       CRUD::column([
        'name'     => 'type',
        'label'    => 'Tipe',
        'type'     => 'custom_html',
        'value' => function($entry) {
            // Check if the user relationship is loaded
            if ($entry->type=='event') {
                // Display the name in a Bootstrap badge
                return '<span class="badge badge-primary">'.$entry->type.'</span>';
            }
            return '<span class="badge badge-secondary">'.$entry->type.'</span>';
        }
        ]);
        CRUD::column('image')
        ->type('custom_html')
        ->label('Foto')
        ->value(function($entry){
           // var_dump($entry->image);
                return  '<img src="' . asset('storage/'. $entry->image) . '" style="width: 100px; height: 100px; margin-right: 5px;" alt="Image">';
            },
        );
       CRUD::column('user_id')
       ->type('closure')
       ->label('User')
       ->value(function($entry){
        return $entry->user->name ;
       });
       CRUD::column('category')
       ->type('closure')
       ->label('Kategori')
       ->value(function($entry) {
         // Decode the JSON string into an array
         $categories = json_decode($entry->category, true);

        // Assuming $entry->categories is an array of category IDs
        if (is_array($categories)) {
            // Fetch the category names based on the IDs
            $categoryName = \App\Models\EventCategories::whereIn('id', $categories)->pluck('category')->toArray();
            // Join the category names with commas
            return implode(', ', $categoryName);
        }
            return null; // Handle case where categories is not an array
        });

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
        CRUD::setValidation(EventsRequest::class);
      //  CRUD::setFromDb(); // set fields from db columns.
        CRUD::field('user_id')->type('hidden')->value(Auth::user()->id);
        CRUD::field('title')->type('text')->label('Judul');
        CRUD::field('slug')->type('text')->label('Slug');
        CRUD::field('type')
        ->type('enum')
        ->label('Tipe')
        ->options(['event'=>'Event','agenda'=>'Agenda'])
        ->wrapper(['class'=>'form-group col-md-2']);
        CRUD::field([
            'name'  => 'description',
            'label' => 'Deskripsi',
            'type'  => 'summernote',
            'options' => [],
        ]);
        CRUD::field([
            'label' => 'Gambar',
            'name' => 'image',
            'type' => 'image',
           // 'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
        ]);
        CRUD::field([   // Date
            'name'    => 'start_date',
            'label'   => 'Mulai',
            'type'    => 'date',
            'wrapper' => [
                'class'=>'form-group col-md-2'
            ]
        ]);
        CRUD::field([   // Date
            'name'  => 'end_date',
            'label' => 'Berakhir',
            'type'  => 'date',
            'wrapper' => [
                'class'=>'form-group col-md-2'
            ]
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
}
