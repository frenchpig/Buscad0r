@extends('layouts.app')

@section('title', 'Searcher Admin - Buscad0r')

@section('content')
    @include('components.searcher-checkboxes')
    @include('components.searcher-form')
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="{{ asset('js/searcher.js') }}"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
    <script src="{{ asset('js/deleter.js') }}"></script>
    <script src="{{ asset('js/adder.js') }}"></script>
    <script src="{{ asset('js/export_database.js') }}"></script>
@endpush
