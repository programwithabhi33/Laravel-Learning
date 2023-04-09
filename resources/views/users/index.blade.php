@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="table">Manage Users</div>
            {{ $dataTable->table() }}
        </div>
    </div>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection