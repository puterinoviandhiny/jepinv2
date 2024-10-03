@extends(backpack_view('blank'))

@section('header')
    <div class="container-fluid d-flex justify-content-between my-3">
        <section class="header-operation animated fadeIn d-flex mb-2 align-items-baseline d-print-none" bp-section="page-header">
            <h1 class="text-capitalize mb-0" bp-section="page-heading">Arrange Photos</h1>
            <p class="ms-2 ml-2 mb-0" bp-section="page-subheading">Arrange Photos for {{ $pariwisata->name }}</p>

        </section>

    </div>
@endsection

@section('content')
<div class="card no-padding no-border mb-0">
    <p>Drag and drop to arrange the images:</p>
    <div class="row" id="sortable">
        @foreach($photos as $photo)
            <div class="col-md-2 ui-state-default" data-id="{{ $photo->id }}" style="margin: 10px;">
                <div class="card">
                    <img src="{{ asset('storage/' . $photo->file) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 mb-2">
            {{-- Change translation button group --}}
            <div class="btn-group float-left">
            <button id="save-order" class="btn btn-primary">Save Order</button>
            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('after_scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#sortable").sortable({
                placeholder: "ui-state-highlight",
                items: "> .col-md-2" // Target only the columns
            });
            $("#sortable").disableSelection();
        });

        $('#save-order').click(function() {
            var orderedIDs = [];
            $('#sortable .col-md-2').each(function() {
                orderedIDs.push($(this).data('id'));
            });

            $.post('{{ url("admin/pariwisata/arrange-photos-save") }}', {
                _token: '{{ csrf_token() }}',
                order: orderedIDs
            }, function(data) {
                alert('Order saved successfully!');
            });
        });
    </script>
@endsection

