@extends('layouts.admin')
@section('content')
    @can('appointment_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.appointments.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Appointment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.client') }}
                        </th>

                        <th>
                            {{ trans('cruds.appointment.fields.start_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.finish_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.comments') }}
                        </th>
                        <th>
                            {{ trans('cruds.appointment.fields.services') }}
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            @can('appointment_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.appointments.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).data(), function(entry) {
                            return entry.id;
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}');
                            return;
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                headers: {
                                    'x-csrf-token': _token
                                },
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                }
                            }).done(function() {
                                location.reload();
                            });
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.appointments.index') }}",
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id',
                        name: 'id',
                        orderable: false
                    },
                    {
                        data: 'client_name',
                        name: 'client.name',
                        orderable: false
                    },
                    {
                        data: 'start_time',
                        name: 'start_time',
                        orderable: false,
                        render: function(data) {
                            return new Date(data).toLocaleString('en-US', {
                                year: 'numeric',
                                month: 'short',
                                day: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            });
                        }
                    },
                    {
                        data: 'finish_time',
                        name: 'finish_time',
                        orderable: false,
                        render: function(data) {
                            return new Date(data).toLocaleString('en-US', {
                                year: 'numeric',
                                month: 'short',
                                day: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            });
                        }
                    },
                    {
                        data: 'price',
                        name: 'price',
                        orderable: false,
                        render: function(data, type, row) {
                            // Check if the price is null or undefined
                            if (data === null || data === undefined) {
                                return 'N/A'; // Display N/A if the price is null
                            }
                            // Otherwise, display the price with the peso sign
                            return '₱' + data;
                        }
                    }, {
                        data: 'comments',
                        name: 'comments',
                        orderable: false
                    },
                    {
                        data: 'services',
                        name: 'services.name',
                        orderable: false
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}',
                        orderable: false,
                        searchable: false
                    }
                ],
                pageLength: 100,
                paging: true,
                info: true,
                language: {
                    lengthMenu: "",
                    info: "",
                    infoFiltered: "",
                    infoEmpty: ""
                }
            };

            $('.datatable-Appointment').DataTable(dtOverrideGlobals);

            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        });
    </script>
@endsection
