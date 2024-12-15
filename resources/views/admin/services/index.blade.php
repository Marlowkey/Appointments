@extends('layouts.admin')
@section('content')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.services.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.service.title_singular') }}
            </a>
        </div>
    </div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.service.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Service">
            <thead>
                <tr>
                    <th width="10">
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.price') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        // Define delete button if the user has permission
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        @can('service_delete')
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.services.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                    return entry.id;
                });

                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}');
                    return;
                }

                if (confirm('{{ trans('global.areYouSure') }}')) {
                    $.ajax({
                        headers: { 'x-csrf-token': _token },
                        method: 'POST',
                        url: config.url,
                        data: { ids: ids, _method: 'DELETE' }
                    }).done(function () { location.reload(); });
                }
            }
        };
        dtButtons.push(deleteButton);
        @endcan

        // DataTable initialization
        let dtOverrideGlobals = {
            buttons: dtButtons,
            processing: false,
            serverSide: false,
            retrieve: false,
            aaSorting: [],
            ajax: "{{ route('admin.services.index') }}",
            columns: [
                { data: 'placeholder', name: 'placeholder', orderable: false, searchable: false },
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'price', name: 'price' },
                { data: 'actions', name: '{{ trans('global.actions') }}', orderable: false, searchable: false }
            ],
            paging: false,
            ordering: false,
            info: false,
            pageLength: -1, // Show all rows
        };

        $('.datatable-Service').DataTable(dtOverrideGlobals);

        // Adjust columns when tabs are switched
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    });
</script>
@endsection
