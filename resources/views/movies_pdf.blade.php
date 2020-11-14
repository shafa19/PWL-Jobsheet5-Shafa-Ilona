<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Laporan PDF dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table {
        	border-collapse: collapse;
            width: 100%;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        th, td {
            text-align: left;
            padding: 16px;
            font-size: 9pt;
            border: 1px solid #999;
            color: #232323;
        }
        tr:nth-child(even) {
	        background-color: #f2f2f2
        }
    </style>

    <center>
        <h5>Laporan Data Movies</h5>
    </center>
    
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Rating</th>
                <th>Synopsis</th>
                <th>Poster</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($movies as $m)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $m->title }}</td>
                <td>{{ $m->rating }}</td>
                <td>{{ $m->synopsis }}</td>
                <td><img width="150" src="{{'storage/'.$m->poster}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>