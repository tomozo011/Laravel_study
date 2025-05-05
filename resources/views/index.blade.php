<body>
    <p>{{ $msg }}</p>
    <ul>
        @foreach($datas as $data)
            <li>{{ $data }}</li>
        @endforeach
    </ul>
</body>
