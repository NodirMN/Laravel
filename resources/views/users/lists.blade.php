<html>
    <body>
        <h2>Foydalanuvchilar ro'yhati</h2>
        <ul>
            @foreach ($users as $user )
            <li>{{ $user }}</li>
            @endforeach
                @foreach ($plans as $plan )
            <li>{{ $plan }}</li>
            @endforeach
        </ul>
    </body>
</html>
