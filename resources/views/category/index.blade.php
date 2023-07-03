@extends('layouts.master')

@section('content')


<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">{{ $pageTitle ?? trans('messages.list') }}</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            @if($auth_user->can('category add'))
                            @endif
                            <a href="{{ route('category.create') }}" class="float-right mr-1 btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i> {{ trans('messages.add_form_title',['form' => trans('messages.category')  ]) }}</a>
                        </div>
                    </div>
                    <div class="iq-card-body p-3">
                        <div class="container mt-3 ">
                            <table  id="datatable" class="table text-center w-100">
                                <thead>
                                    <tr>
                                        <th>nama 1</th>
                                        <th>color</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ( $catagory as $data)
                                 <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->color }}</td>

                                </tr>
                                 @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
