<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PariwisataRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Auth;
use App\Models\PariwisataImage;
use Illuminate\Support\Facades\Storage;

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
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
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
        $this->crud->addButtonFromModelFunction('line', 'arrangePhotos', 'arrangePhotos', 'beginning');
        //CRUD::setFromDb(); // set columns from db columns.
        $this->crud->enableBulkActions();
        CRUD::column('name')->type('text')->label('Nama');
        CRUD::column('address')->type('text')->label('Alamat');
        CRUD::column('description')->type('text')->label('Deskripsi');
        CRUD::column('category_id')
        ->type('select')
        ->label('Kategori')
        ->entity('category')
        ->attribute('category')
        ->model(\App\Models\PariwisataCategory::class);

        CRUD::addColumn([
            'name'     => 'id', // This could be any column, but it won't be used since we're using a closure.
            'label'    => 'Foto',
            'type'     => 'closure',
            'function' => function($entry) {
                // Fetch the related photos from the PariwisataImage model
                $photos = \App\Models\PariwisataImage::where('pariwisata_id', $entry->id)->get();

                // Initialize an empty string to store the image HTML
                $output = '';

                // Loop through each photo and append its image tag to the output string
                foreach($photos as $photo) {
                    $output .= '<img src="' . asset('storage/'. $photo->file) . '" style="width: 200px; height: 200px; margin-right: 5px;" alt="Image">';
                }

                // Return the image HTML. If no photos are found, return a message or an empty string
                return $output ?: 'No Photos';
            },
            'escaped'  => false, // Allow HTML to be rendered
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
        CRUD::setValidation(PariwisataRequest::class);
       // CRUD::setFromDb(); // set fields from db columns.
      // if (Auth::check()) {
        $userID = Auth::user()->id;
        //dd($userID);
       //  } else {
       // dd('User is not authenticated');
      //  }

        CRUD::field('user_id')->type('hidden')->value($userID);
        CRUD::field('name')->type('text')->label('Nama');
        CRUD::field('address')->type('text')->label('Alamat');
        CRUD::field('description')->type('text')->label('Deskripsi');
        CRUD::field('halal')->type('enum')->label('Halal')->options(['YA'=>'Ya','TIDAK'=>'Tidak']);
        CRUD::field('phone')->type('text')->label('Telepon');
        CRUD::field('email')->type('email')->label('Email');
        CRUD::field('district')->type('text')->label('Kelurahan');
        CRUD::field('latitude')->type('text')->label('Latitude');
        CRUD::field('longitude')->type('text')->label('Longitude');

       CRUD::field('master_id')
        ->type('select')
        ->label('Master')
        ->entity('master')
        ->attribute('name')
        ->model(\App\Models\PariwisataMaster::class);

        CRUD::field('category_id')
        ->type('select')
        ->label('Kategori')
        ->entity('category')
        ->attribute('category')
        ->model(\App\Models\PariwisataCategory::class);

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

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    public function store()
    {
    // Use the Backpack create operation logic
    $response = $this->traitStore();

    // Get the created Pariwisata model
    $pariwisata = $this->crud->getCurrentEntry();
       // dd($pariwisata);
    // Handle the file upload for the PariwisataImage model
    if (request()->hasFile('photos')) {
        foreach (request()->file('photos') as $photo) {
            $path = $photo->store('pariwisata_images', 'public');

            // Save the file path into PariwisataImage model
            PariwisataImage::create([
                'user_id' => $pariwisata->user_id,
                'pariwisata_id' => $pariwisata->id,
                'file' => $path,
            ]);
        }
    }

    return $response;
}

public function arrangePhotos($id)
{
    $pariwisata = \App\Models\Pariwisata::find($id);
    $photos = $pariwisata->image()->get(); // Assuming you have a relation with PariwisataImage model

    return view('admin.pariwisata.arrange_photos', compact('pariwisata', 'photos'));
}

public function savePhotoOrder(PariwisataRequest $request)
{
    $photoOrder = $request->input('order');

    foreach ($photoOrder as $index => $photoId) {
        $photo = \App\Models\PariwisataImage::find($photoId);
        $photo->position = $index + 1; // Assuming you have a 'position' field in the photos table
        $photo->save();
    }

    return response()->json(['success' => true]);
}

}
