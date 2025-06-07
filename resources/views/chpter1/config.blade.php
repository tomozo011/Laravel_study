<body>
    <p>{{ $msg }}</p>

    @foreach ( $numbers as $number )
        <li>{{ $number }}</li>
    @endforeach
</body>
