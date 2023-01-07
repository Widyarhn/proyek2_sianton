@php
    use Carbon\Carbon; 
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: rgba(40, 58, 90, 0.9); color: white; padding: 0px; margin: 0px">
    
    <center><br>
        <img src="{{ public_path('admin/assets/img/logo_sianton.png') }}" alt="" height="55" >
        <h1>Praktek Umum dr. Iyan Rakhmawati</h1>
        <p>Jl. Bulak</p>
        <b><hr></b>
        <h4>
            {{ Carbon::createFromFormat("Y-m-d", $data->tanggal_antrian)->isoFormat('D MMMM Y') }}
        </h4>
        <h1>{{ $data->pasien->nama }}</h1><br>
        <h3>No. Antrian anda:</h3>
        <h1>ANT - 0{{ $data->no_antrian }}</h1>
        
        <hr>
        <p>*Datanglah 15 menit setelah mengambil antrian.
        <br> *Karcis antrian hanya berlaku 1 hari 
        <br> *Tunjukan karcis antrian/hasil download saat ke klinik</p><br><br>
        <h3>Terima kasih atas kunjungannya. <br> Kepuasan Pasien adalah kebahagiaan kami.</h3>


    </center>

    
</body>
</html>