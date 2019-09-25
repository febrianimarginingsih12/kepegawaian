<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>hubungan</th>
            <th>id_karyawan</th>
        </tr>
        @foreach($datakeluarga as $p)
        <tr>
            <td>{{$p->id }}</td>
            <td>{{$p->nama }}</td>
            <td>{{$p->hubungan }}</td>
            <td>{{$p-> id_karyawan}}</td>
        <tr>
        @endforeach
    </table>
</body>
</html>