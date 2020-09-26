@extends('layouts.default')

@section('title', 'List of Orders')

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div class="col-12">
                @verbatim
                    <ul><li v-for="d in data">{{ d.name }}</li></ul>
                @endverbatim
            </div>
        </div>
    </div>
@endsection
