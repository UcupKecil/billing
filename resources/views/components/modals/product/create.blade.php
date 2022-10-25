<form id="createForm">
      <div class="modal" tabindex="-1" role="dialog" id="createModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="createName">Nama Produk</label>
                    <input type="text" class="form-control" id="createName" name="name">
                </div>
                <div class="form-group">
                    <label for="createProductCategory">Kategori Produk</label>
                    <select name="product_category_id" id="createProductCategory" class="form-control">
                        <option value="" selected disabled>Pilih Kategori</option>
                        @foreach($productCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="createPrice">Harga</label>
                <input type="text" class="form-control price" id="createPrice" name="price">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="createSubmit">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</form>
