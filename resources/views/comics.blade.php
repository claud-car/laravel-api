@extends('layouts.app')

@section('content')
<main id="root">
    <ul>
        <li v-for="comic in comics" :key="comic.id">
            <h4>@{{comic.name}}</h4>
            <p>@{{comic.description}}</p>
        </li>
    </ul>
</main>
@endsection


@section('foot-script')
<script src="{{asset('js/comics.js')}}"></script>
@endsection

@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
@endsection
