<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-success tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data
        </button>
        <br><br>
            <h3>daftar mahasiswa</h3>
            
            <ul class="list-group">

                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item "><?= $mhs['nama']; ?>

                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin?')">Hapus</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-warning float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end me-1" >detail</a>

                    </li>
                <?php endforeach; ?>
   
            </ul>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        
        <input type="hidden" name="id" id="id"> 

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="nisn" class="form-label">nisn</label>
            <input type="number" class="form-control" id="nisn" name="nisn">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group mb-3">
            <label class="form-group-text" for="jurusan">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
                <option value="RPL">RPL</option>
                <option value="MM">MM</option>
                <option value="TKJ">TKJ</option>
                <option value="AK">AK</option>
                <option value="APH">APH</option>
                <option value="OTKP">OTKP</option>
            </select>
        </div>

      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>