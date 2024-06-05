<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Feedback</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Laporan Penduduk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="navbar-right">
        <?= anchor('laporan/add','<button class="btn btn-primary" style="display: flex; justify-content:start;"><i class="nav-icon fas fa-plus"> Tambah Data</i></button>')?>
    </div>
    <!-- search bar -->
        <div class="form-inline" style="display: flex; justify-content:end;">
        <div class="input-group">
        <form action="<?= base_url(). 'index.php/laporan/search' ?>" method="post" class="row g-3">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-success" type="submit">
              <i class="fas fa-search fa-fw"></i>
            </button>
        </form>
          </div>
        </div>
      </div>
    <!-- end of search bar -->
    <table class="table">
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>ASPIRASI</th>
                    <th>LOKASI</th>
                    <th>FEEDBACK</th>
                    <th></th>
                </tr>
            <tbody>
                <!-- DATA PELAPOR -->
                <?php
            $no = 1;
            foreach($laporan as $lapor):
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $lapor->nik ?></td>
                <td><?php echo $lapor->nama ?></td>
                <td><?php echo $lapor->aspirasi ?></td>
                <td><?php echo $lapor->lokasi ?></td>
                <td><i class="nav-icon fas fa-thumbs-up"></i></td>
                <td><i class="nav-icon fas fa-thumbs-down"></i></td>
                
            </tr>
            <?php endforeach; ?>

            </tbody>
        <!-- end of table -->

    </table>
    </section>
</div>