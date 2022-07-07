@extends("layouts.app")
@section('wrapper')

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr><br><br><br><br><br>
          <td>Merk</td>
          <td>Kategori</td>
          <td>Jenis Sampah</td>
          <td>Asal Perusahaan/Produsen</td>
          <td>Berat Sampah (KG)</td>
          <td>Tanggal Dibuat</td>
          @can('is_Admin')
          <td colspan="2">Action</td>
          @endcan
        </tr>
    </thead>
    <tbody>
        @foreach($wastes as $waste)
        <tr>
            <td>{{$waste->merk}}</td>
            <td>{{$waste->kategori}}</td>
            <td>{{$waste->jenis_sampah}}</td>
            <td>{{$waste->produsen_sampah}}</td>
            <td>{{$waste->berat_sampah}}</td>
            <td>{{$waste->created_at}}</td>
            @can('is_Admin')
            <td><a href="{{ route('wastes.edit', $waste->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('wastes.destroy', $waste->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
              
            @endcan
        </tr>
        @endforeach
    </tbody>
  </table>
  <input type="button" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
<div>
@endsection