<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div class="container pt-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>World Currency Information</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Currency</th>
                            <th>Rate Buy</th>
                            <th>Rate Cross</th>
                            <th>Rate Sell</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody id="currency-data">
                        @if(!empty($data))
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item['currencyCodeA']}}/{{$item['currencyCodeB']}}</td>
                                    <td>{{$item['rateBuy']}}</td>
                                    <td>{{$item['rateCross']}}</td>
                                    <td>{{$item['rateSell']}}</td>
                                    <td>{{\Carbon\Carbon::parse($item['date'])->format('Y-m-d h:m')}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

