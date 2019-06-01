@extends('layouts.app')

@section('title', 'Profile page')

@section('content')
    @component('components.statistics.statistics',['statistics'=>$statistics])
    {{-- statistics section component --}}
    @endcomponent

    @component('components.data_holder',['about'=>$about,
    'progression_data'=>$progression,
    'achievements'=>$achievements,
    'statistics'=>$statistics])
    {{-- all user related data section component --}}
    @endcomponent
   
@endsection

