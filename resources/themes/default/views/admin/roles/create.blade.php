@extends('layouts.master')

@section('head_extra')
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <div class="box-body">

                {!! Form::open( ['route' => 'admin.roles.store', 'id' => 'form_edit_role'] ) !!}

                @include('admin.roles._role_form')

                <div class="form-group">
                    {!! Form::submit( trans('general.button.create'), ['class' => 'btn btn-primary', 'id' => 'btn-submit-edit'] ) !!}
                    <a href="{!! route('admin.roles.index') !!}" title="{{ trans('general.button.cancel') }}" class='btn btn-default'>{{ trans('general.button.cancel') }}</a>
                </div>

                {!! Form::close() !!}

            </div><!-- /.box-body -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection

@section('body_bottom')
@endsection