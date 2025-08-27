<div class="card my-2 border text-white px-3">
    <h1>{{ $pessoas }}</h1>
    <hr>
    <ul>
        @foreach ($linguas as $lingua)
            <li class="text-warning">{{ $lingua }}</li>
        @endforeach
    </ul>
</div>
