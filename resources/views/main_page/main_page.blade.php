@extends('layouts.app')

@section('title', 'Profile page')

@section('content')
    @component('components.statistics.statistics')
    {{-- statistics section component --}}
    @endcomponent

    @component('components.data_holder')
    {{-- all user related data section component --}}
    @endcomponent
   
@endsection

