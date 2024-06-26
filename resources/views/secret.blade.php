<div>
    zone private

    <a href="{{route('logout')}}">
        <button class="">
            salir
        </button>
    </a>

    <form action="{{route('create-book')}}" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="description">

        <button>Registrar</button>
    </form>

    <div>
        {{$books}}
    </div>

</div>