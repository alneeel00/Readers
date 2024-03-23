@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('main_trans.contact') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{ trans('main_trans.Contact') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


@if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
@endif



<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

          =

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('main_trans.Name_contact') }}</th>
                            <th>{{ trans('main_trans.Email') }}</th>
                            <th>{{ trans('main_trans.mobile') }}</th>
                            <th>{{ trans('main_trans.message') }}</th>
                            <th>{{ trans('main_trans.CREATED') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($Contact as $Contact)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $Contact->Name }}</td>
                                <td>{{ $Contact->email }}</td>
                                <td>{{ $Contact->mobile }}</td>
                                <td>{{ $Contact->message }}</td>
                                <td>{{ $Contact->created_at }}</td>
                            </tr>

                           


                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<!-- add_modal_Grade -->


</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
