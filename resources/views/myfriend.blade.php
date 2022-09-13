<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <div class="content">

        @if(isset($nrp))
        <div class="title m-b-md">
            @if ($nrp ==160419138)
            <p>Nrp : 160419138</p>
            <p>Nama : wahyu</p>
            <p>Asal : Lamongan</p>
            <p>Hobi : membaca</p>
            @elseif ($nrp ==160419150)
            <p>Nrp : 160419150</p>
            <p>Nama : Michael</p>
            <p>Nama : Malang</p>
            <p>Hobi : menonton</p>
            @elseif ($nrp == 160419157)
            <p>Nrp : 160419157</p>
            <p>Nama : elsafira</p>
            <p>Nama : Banyuwangi</p>
            <p>Hobi : bersepeda</p>
            @elseif($nrp == 160419117)
            <p>Nrp : 160419117</p>
            <p>Nama : Margareta</p>
            <p>Nama : Kediri</p>
            <p>Hobi : menyanyi</p>
            @else
                isi dulu
            @endif
        </div>
        @else
            <table>
                <tr role="row">
                    <th>No</th>
                    <th>Nrp</th>
                    <th>Nama</th>
                    <th>Lihat Detail</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>160419138</td>
                    <td>Wahyu</td>
                    <td>
                        <a href="/myfriend/160419138">view</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>160419150</td>
                    <td>Michael</td>
                    <td>
                        <a href="/myfriend/160419150">view</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>160419157</td>
                    <td>Elsafira</td>
                    <td>
                        <a href="/myfriend/160419157">view</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>160419117</td>
                    <td>Margareta</td>
                    <td>
                        <a href="/myfriend/160419117">view</a>
                    </td>
                </tr>
            </table>
        @endif
    </div>
</body>

</html>