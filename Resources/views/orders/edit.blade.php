@extends('layouts.admin.master')

@section('title') {{ _t('edit') . ' ' . _t('order') }} @endsection

@section('css')
    <link href="{{ theme_url('assets/css/select2.min.css')}}" id="app-light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ theme_url('assets/libs/toastr/toastr.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') {{ _t('order') }} @endslot
        @slot('li_1') {{ _t('home') }} @endslot
        @slot('li_2') {{ _t('edit') . ' ' . _t('order') }} @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ _t('edit') . ' ' . _t('order') }}</h4>

                    @include('common-components.forms.alert-error')

                    {!! Form::model($order, ['route' => ['orders.update', $order->id],'method'=>'PATCH', 'class' => 'outer-repeater', 'enctype' => 'multipart/form-data']) !!}
                    <div data-repeater-list="outer-group" class="outer">
                        @include('order::orders._edit_form')
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit"
                                    class="btn btn-primary">{{ _t('update') . ' ' . _t('order') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')
    @include('common-components.functions.toastr')
@endsection
