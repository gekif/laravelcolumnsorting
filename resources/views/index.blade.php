<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <h2>Index Page</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('companyname')</th>
            <th>@sortablelink('price')</th>
            <th>@sortablelink('created_at')</th>
            <th>@sortablelink('updated_at')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->id}}</td>
                <td>{{$stock->companyname}}</td>
                <td>{{$stock->price}}</td>
                <td>{{$stock->created_at}}</td>
                <td>{{$stock->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $stocks->appends(\Request::except('page'))->render() !!}
</div>
</body>
</html>