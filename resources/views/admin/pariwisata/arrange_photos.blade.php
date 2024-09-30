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
    <p>Drag n drop pada foto</p>
    <ul id="sortable">
        @foreach($photos as $photo)
            <li class="ui-state-default" data-id="{{ $photo->id }}">
                <img src="{{ asset('storage/' . $photo->file) }}" width="100">
                <span>{{ $photo->file }}</span>
            </li>
        @endforeach
    </ul>
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
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    });

    $('#save-order').click(function() {
        var orderedIDs = [];
        $('#sortable li').each(function() {
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
