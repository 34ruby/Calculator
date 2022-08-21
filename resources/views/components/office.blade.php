<head>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
</head>

<h1>CSV to Table</h1>
<hr>
    <form action="{{ route('office.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <button>インポート</button>
    </form>
<hr>
<table>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">会社名</th>
            <th scope="col">住所</th>
            <th scope="col">料金</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($offices as $office)
        <tr>
            <td>{{ $office->id }}</td>
            <td>{{ $office->name }}</td>
            <td>{{ $office->address}}</td>
            @if (strpos($office->address, "東京都") !== false)
                <td>95</td>
            @elseif (strpos($office->address, "埼玉県") !== false)
                <td>105</td>
            @elseif (strpos($office->address, "千葉県") !== false)
                <td>105</td>
            @elseif (strpos($office->address, "神奈川県") !== false)
                <td>105</td>
            @elseif (strpos($office->name, "東京都") !== false)
                <td>95</td>
            @elseif (strpos($office->name, "埼玉県") !== false)
                <td>105</td>
            @elseif (strpos($office->name, "千葉県") !== false)
                <td>105</td>
            @elseif (strpos($office->name, "神奈川県") !== false)
                <td>105</td>
            @elseif (strpos($office->name, "会社名") !== false)
                <td>0</td>
            @else
                <td>110</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
