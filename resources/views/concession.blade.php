<div>
        <div>
            <h2>{{ $concession->name }}</h2>
            <ul>
                @foreach ($concession->mines as $mine)
                    <li>{{ $mine->name }}</li>
                @endforeach
            </ul>
        </div>
</div>
