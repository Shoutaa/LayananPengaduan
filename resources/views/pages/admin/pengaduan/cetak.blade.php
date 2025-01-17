<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Pengaduan</title>
  <style>
    img {
      height: 200px;
      width: auto;
      display: block;
      margin: 20px auto;
      border: 2px solid #ddd;
      border-radius: 5px;
    }

    hr.solid {
      border-top: 3px solid #3B82F6;
    }

    .table thead {
      background-color: #3B82F6;
      color: white;
      text-align: center;
    }

    .table-bordered {
      border: 1px solid #ddd;
    }

    .table-bordered td, 
    .table-bordered th {
      border: 1px solid #ddd;
      text-align: left;
      padding: 10px;
      vertical-align: middle;
    }

    h2, h6 {
      font-family: Arial, sans-serif;
    }

    .title h2 {
      font-weight: bold;
    }

    .description {
      text-align: justify;
    }

    .container {
      padding: 30px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <!-- Title Section -->
    <div class="title text-center mb-5">
      <h2>Layanan Pengaduan Masyarakat</h2>
    </div>
    <hr class="solid">

    <!-- Report Info Section -->
    <div class="mb-4">
      <h6>Laporan Pengaduan</h6>
      <h6><strong>{{ $pengaduan->created_at->format('l, d F Y') }}</strong></h6>
    </div>
    <hr class="solid">

    <!-- Personal Info Section -->
    <div class="mt-3 mb-4">
      <h6><strong>Nama:</strong> {{ $pengaduan->name }}</h6>
      <h6><strong>NIK:</strong> {{ $pengaduan->user_nik }}</h6>
      <h6><strong>No. Telepon:</strong> {{ $pengaduan->user->phone }}</h6>
      <img src="{{ public_path('storage/' . str_replace('public/', '', $pengaduan->image)) }}" alt="Gambar Laporan" />
    </div>

    <!-- Table Section -->
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col" style="width: 70%;">Laporan Pengaduan</th>
          <th scope="col" style="width: 30%;">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="description">{{ $pengaduan->description }}</td>
          <td class="text-center">
            @if($pengaduan->status === 'Belum di Proses')
            <span class="badge badge-danger">{{ $pengaduan->status }}</span>
            @elseif($pengaduan->status === 'Sedang di Proses')
            <span class="badge badge-warning">{{ $pengaduan->status }}</span>
            @else
            <span class="badge badge-success">{{ $pengaduan->status }}</span>
            @endif
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
