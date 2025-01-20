@extends('layouts.app')

@section('content')
    <input type="text" id="search" placeholder="Search..." onkeyup="handleSearch()">
    <ul id="records">
        @foreach ($records as $record)
            <li>{{ $record['title'] }} - {{ $record['notes'] }}</li>
        @endforeach
    </ul>
    <script>
        let timeout;
        function handleSearch() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                const query = document.getElementById('search').value;
                fetch(`/search?query=${query}`)
                    .then(res => res.json())
                    .then(data => {
                        const records = document.getElementById('records');
                        records.innerHTML = data.map(record => `<li>${record.title} - ${record.notes}</li>`).join('');
                    });
            }, 300);
        }
    </script>
@endsection
