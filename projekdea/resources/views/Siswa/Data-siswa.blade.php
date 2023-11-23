
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
</head> 
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('beranda')}}">Beranda</a></li>
              <li class="breadcrumb-item"><a href="{{ url('data-siswa')}}">Data Siswa</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('create-siswa') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class ="table table-bordered">
                <tr>  
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtSiswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->notlp }}</td>
                    <td>{{date('d-m-Y', strtotime($item->tgllhr)) }}</td>
                    <td>
                      <a href="{{ url('edit-siswa',$item->id) }}"><i class="fas fa-edit" style="color : grey"></i></a>
                      |
                      <a href="{{ url('delete-siswa',$item->id) }}"><i class="fas fa-trash-alt" style="color : red"></i></a>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Profile</h5>
      <p>Log In</p>
      <p>Sign Up</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')

    @include('sweetalert::alert')
</body>
</html>
