<form id="editForm">
      <div class="modal" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ubah Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <label for="createName">Judul Berita</label>
                  <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-group">
                  <label for="berita_kategori_id">Kategori Berita</label>
                  <select name="berita_kategori_id" id="berita_kategori_id" class="form-control">

                      @foreach($BeritaKategori as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="quoteEdit" class="col-form-label">Kutipan</label>
                <textarea class="form-control" id="quoteEdit" name="quoteEdit"></textarea>
                @error('quote')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="summaryEdit" class="col-form-label">Ringkasan <span class="text-danger">*</span></label>
                <textarea class="form-control" id="summaryEdit" name="summaryEdit">{{old('summary')}}</textarea>
                @error('summary')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="descriptionEdit" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit">{{old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                              <label for="coverEdit">Cover Buku</label>
                              <input type="file" id="coverEdit" name='coverEdit' class="form-control-file" required data-allowed-file-extensions="jpg png" data-max-file-size-preview="3M">
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
