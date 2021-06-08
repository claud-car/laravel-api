@extends('layouts.app')

@section('main')
<main id="root">
    <ul>
        <li v-for="comic in comics" :key="comic.id">
            <h4></h4>
            <p></p>
        </li>
    </ul>
</main>
@endsection


@section('foot-script')
<script type="text/javascript">
    let app= new Vue({
        el: '#root',
        data: {
            comics:[]
        },
        created() {
            axios.get('http://localhost:8000/api/comics').then((response) => {
                this.comics = response.data.data;
            })
        }
    });
</script>


@endsection

@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
@endsection
