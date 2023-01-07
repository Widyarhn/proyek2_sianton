<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>DATA PASIEN PADA DOKTER PRAKTIK</h3>
        <h4>dr. Iyan Rakhmawati</h4>
	</center>
<br><br>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Dosis Obat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <th scope="row" style="text-align: center">{{ $loop->iteration }}.</th>
                <td>{{ $d->nik }}</td>
                <td>{{ $d->pasien->nama }}</td>
                <td>{{ $d->pasien->jenis_kelamin }}</td>
                <td>{{ $d->keluhan->keluhan }}</td>
                <td>{{ $d->keluhan->diagnosa }}</td>
                <td>{{ $d->keluhan->dosis_obat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>