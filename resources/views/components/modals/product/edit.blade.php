<form id="editForm">
      <div class="modal" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ubah Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="editName">Nama Produk</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="editProductCategory">Kategori Produk</label>
                    <select name="product_category_id" id="editProductCategory" class="form-control">

                        @foreach($productCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="editPrice">Harga</label>
                <input type="text" class="form-control price" id="price" name="price">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="editSubmit">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</form>
