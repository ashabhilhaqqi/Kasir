<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang Baru</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

    <form method="post">

      <!-- Modal body -->
      <div class="modal-body">
        <input type="text" name="namaproduk" class="form-control" placeholder="Nama produk">
        <input type="text" name="deskripsi" class="form-control mt-2" placeholder="Deskripsi">
        <input type="num" name="stock" class="form-control mt-2" placeholder="Stock Awal">
        <input type="num" name="harga" class="form-control mt-2" placeholder="Harga Produk">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="tambahbarang">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </form>

    </div>
  </div>
</div>