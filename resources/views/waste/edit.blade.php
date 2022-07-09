@extends("layouts.app")


@section('wrapper')
<div class="card uper">
  <div class="card-header">
    Edit Data Sampah
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('wastes.update', $waste->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="merk">Merk:</label>
              <input type="text" class="form-control" name="merk" value="{{ $waste->merk }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="kategori">Kategori:</label>
              <select id="kategori" name="kategori" value="{{ $waste->kategori }}"/>
                <option value="">-- Pilih Ketegori Sampah--</option>
                <option value="Buah atau Sayuran">Buah atau Sayuran</option>
                <option value="Barang Elektronik">Barang Elektronik</option>
                <option value="Kemasan Makanan">Kemasan Makanan</option>
                <option value="Kemasan Minuman">Kemasan Minuman</option>
                <option value="Produk Perawatan Diri">Produk Perawatan Diri</option>
                <option value="Produk Rumah Tangga">Produk Rumah Tangga</option>
                <option value="Bahan Kimia">Bahan Kimia</option>
                <option value="Lainnya">Lainnya</option>
            </select>            
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="jenis_sampah">Jenis Sampah:</label>
              <select id="jenis_sampah" name="jenis_sampah" value="{{ $waste->jenis_sampah }}"/>
                <option value="">-- Pilih Jenis Sampah--</option>
                <option value="Organik">Organik</option>
                <option value="Anorganik">Anorganik</option>
                <option value="B3">B3</option>
                <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="produsen_sampah">Asal Perusahaan/Produsen:</label>
              <input type="text" class="form-control" name="produsen_sampah" value="{{ $waste->produsen_sampah }}"/>
          </div>
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="berat_sampah">Berat Sampah:</label>
              <input type="number" id="berat_sampah" name="berat_sampah" min="1" max="100" value="{{ $waste->berat_sampah }}"/> KG
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection