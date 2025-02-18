<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>
            Point Of Sales
        </Title>    
    </head>
    <body>
        <h1>Daftar Kategori Produk</h1>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ url('category/' . $category['slug']) }}">{{ $category['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </body>
</html>