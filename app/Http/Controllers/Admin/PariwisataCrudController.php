<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PariwisataRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\warning;

/**
 * Class PariwisataCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PariwisataCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Pariwisata::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pariwisata');
        CRUD::setEntityNameStrings('pariwisata', 'pariwisata');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('name')->type('text')->label('Nama');
        CRUD::column('address')->type('text')->label('Alamat');
        CRUD::column('description')->type('text')->label('Deskripsi');
        CRUD::column('category_id')->type('select')->label('Kategori')->entity('category')->attribute('name');
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
        CRUD::setValidation(PariwisataRequest::class);
       // CRUD::setFromDb(); // set fields from db columns.
       $userID = Auth::id();
        CRUD::field('user_id')->type('hidden')->value($userID);
        CRUD::field('name')->type('text')->label('Nama');
        CRUD::field('address')->type('text')->label('Alamat');
        CRUD::field('description')->type('text')->label('Deskripsi');

       CRUD::field('master_id')
        ->type('select')
        ->label('Master')
        ->entity('master')
        ->attribute('name')
        ->model(\App\Models\PariwisataMaster::class)
        ->attributes(['id' => 'master_id']); // Add an ID to target it with JavaScript

        CRUD::field('photos')->type('upload_multiple')->label('Foto')->upload(true)->disk('public');

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

    public function store()
    {
    // Use the Backpack create operation logic
    $response = $this->traitStore();

    // Get the created Pariwisata model
    $pariwisata = $this->crud->getCurrentEntry();
        dd($pariwisata);
    // Handle the file upload for the PariwisataImage model
    if (request()->hasFile('photos')) {
        foreach (request()->file('photos') as $photo) {
            $path = $photo->store('pariwisata_images', 'public');

            // Save the file path into PariwisataImage model
            PariwisataImage::create([
                'pariwisata_id' => $pariwisata->id,
                'file' => $path,
            ]);
        }
    }

    return $response;
}

}
