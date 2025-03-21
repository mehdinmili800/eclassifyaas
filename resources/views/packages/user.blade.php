@extends('layouts.main')

@section('title')
    {{ __('User Packages') }}
@endsection

@section('page-title')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>@yield('title')</h4>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first"></div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <div class="row " id="toolbar"> --}}

                        <div class="row">
                            <div class="col-12">

                                <table class="table-borderless table-striped" aria-describedby="mydesc"
                                       id="table_list" data-toggle="table" data-url="{{ route('package.users.show') }}"
                                       data-click-to-select="true" data-side-pagination="server" data-pagination="true"
                                       data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true"
                                       data-search-align="right" data-toolbar="#toolbar" data-show-columns="true"
                                       data-show-refresh="true" data-fixed-columns="true" data-fixed-number="1"
                                       data-fixed-right-number="1" data-trim-on-search="false" data-responsive="true"
                                       data-sort-name="id" data-sort-order="desc" data-pagination-successively-size="3"
                                       data-escape="true"
                                       data-query-params="queryParams" data-table="packages"
                                       data-show-export="true" data-export-options='{"fileName": "user-package-list","ignoreColumn": ["operate"]}' data-export-types="['pdf','json', 'xml', 'csv', 'txt', 'sql', 'doc', 'excel']"
                                       data-mobile-responsive="true">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" data-field="id" data-align="center" data-sortable="true">{{ __('ID') }}</th>
                                        <th scope="col" data-field="user.name" data-align="center" data-sortable="false">{{ __('User Name') }}</th>
                                        <th scope="col" data-field="package.name" data-align="center" data-sortable="false">{{ __('Package Name') }}</th>
                                        <th scope="col" data-field="start_date" data-align="center">{{ __('Start Date') }}</th>
                                        <th scope="col" data-field="end_date" data-align="center" data-formatter="unlimitedBadgeFormatter" data-sortable="true">{{ __('End Date') }}</th>
                                        <th scope="col" data-field="total_limit" data-align="center" data-formatter="unlimitedBadgeFormatter" data-sortable="true">{{ __('Total Limit') }}</th>
                                        <th scope="col" data-field="used_limit" data-align="center" data-sortable="true">{{ __('Used Limit') }}</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
