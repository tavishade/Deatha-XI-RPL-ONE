
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
            <h1 class="m-0">Universitas Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
            <h3>Merubah Data Siswa</h3>
          </div>
            <div class="card-body">
                <form action="{{ url('update-siswa', $sis->id) }}" method="post">
                  {{ csrf_field() }}  
                  <div class="form-group">
                    <input type="hidden" name="nislama" value="{{ $sis->nis }}">
                    <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS Siswa" value="{{ $sis->nis }}">
                  </div>
                  <div class="form-group">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Siswa" value="{{ $sis->nama }}">
                  </div>
                  <div class="form-group">
                    <textarea id="nama" name="alamat" class="form-control" placeholder="Alamat Siswa" value="{{ $sis->alamat }}"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ $sis->jenis_kelamin }}">
                  </div>
                  <div class="form-group">
                    <input type="text" id="notlp" name="notelp" class="form-control" placeholder="Nomor Telepon" value="{{ $sis->notlp }}">
                  </div>
                  <div class="form-group">
                    <input type="date" id="tgllhr" name="tgllhr" class="form-control" value="{{ $sis->tgllhr }}">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Ubah Data</button>
                  </div>
                </form>
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
      <h5>Title</h5>
      <p>Sidebar content</p>
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
   <!-- REQUIRED SCRIPTS -->
   @include('Template.script')

   @include('sweetalert::alert')
</body>
</html>
