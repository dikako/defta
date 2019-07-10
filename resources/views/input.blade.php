@extends('_layout')

@section('content')
    <div class="container-fluid">
        <div class="col-md-6">
            <form-data :new-item.sync="newItem" :items="items"></form-data>
        </div>
        <div class="col-md-6">
            <table-data :new-item.sync="newItem" :items="items" :total_zakat="total_zakat" :total_infaq="total_infaq" :total="total"></table-data>
        </div>
    </div>
@endsection
