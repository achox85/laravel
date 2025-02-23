<!-- Modal -->
<div class="modal fade" id="mdlpilih" tabindex="-1" role="dialog" aria-labelledby="mdlpilihLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Unsur</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-select" id="cbunsur">
          @if(count($unsur))
            @foreach($unsur as $i=>$un)
            <option value='{{ $un->no }}' data-code='{{ $un->code }}' data-nama='{{ $un->nama}}' jenis='{{ $un->namajenis }}' kelas='{{ $un->namakelas }}'>
              {{ $un->code.' | '.$un->nama}}
            </option>
            @endforeach
          @endif
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button id="btnpilih" type="button" class="btn btn-primary">Pilih</button>
      </div>
    </div>
  </div>
</div>