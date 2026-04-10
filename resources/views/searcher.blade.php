@extends('layouts.app')

@section('title', 'Buscador - Buscad0r')

@section('content')
    @include('components.searcher-checkboxes')
    @include('components.searcher-form')
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="{{ asset('js/searcher.js') }}"></script>
@endpush
