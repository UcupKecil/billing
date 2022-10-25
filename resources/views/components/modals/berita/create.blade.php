<form id="createForm">
      <div class="modal" tabindex="-1" role="dialog" id="createModal">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="createName">Judul Berita</label>
                    <input type="text" class="form-control" id="createName" name="title">
                </div>
                <div class="form-group">
                    <label for="createBeritaCategory">Kategori Berita</label>
                    <select name="berita_kategori_id" id="createBeritaKategori" class="form-control">
                        <option value="" selected disabled>Pilih Kategori</option>
                        @foreach($BeritaKategori as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="quote" class="col-form-label">Kutipan</label>
                  <textarea class="form-control" id="quote" name="quote">{{old('quote')}}</textarea>
                  @error('quote')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="summary" class="col-form-label">Ringkasan <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="summary" name="summary">{{old('summary')}}</textarea>
                  @error('summary')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="description" class="col-form-label">Deskripsi</label>
                  <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
                  @error('description')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="form-group">
                                <label for="cover">Cover Buku</label>
                                <input type="file" id="cover" name='cover' class="form-control-file" required data-allowed-file-extensions="jpg png" data-max-file-size-preview="3M">
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
