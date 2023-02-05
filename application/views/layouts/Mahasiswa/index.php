    <div class="container mt-3">
        <div class="row mb-2">
            <div class="col-md-9">
                <h3>Halaman Modul Mahasiswa</h3>
            </div>
            <div class="col-md-3 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_mhsModal">Tambah Data</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered text-center">
                    <tr style="background-color: red;">
                        <th style="color: white;">No</th>
                        <th style="color: white;">Nama</th>
                        <th style="color: white;">NPM</th>
                        <th style="color: white">Alamat</th>
                        <th style="color: white;">Action</th>
                    </tr>
                    <?php $no=0; foreach($mahasiswa as $mhs) { $no++; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $mhs['nama'] ?></td>
                        <td><?php echo $mhs['npm'] ?></td>
                        <td><?php echo $mhs['alamat'] ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update_mhsModal">Update</button>
                            <a href="<?php echo base_url(); ?>mahasiswa/delete_mhs/<?php echo $mhs['id_mhs'] ?>" type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="add_mhsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url(); ?>/Mahasiswa/add_mhs" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" id="npm" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="15" rows="5" class="form-control" required=""></textarea>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="delete_mhsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" type="button" class="btn btn-danger">Delete</a>
                </div>

            </div>
        </div>
    </div> -->
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</body>
</html>