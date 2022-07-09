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
        <tr align=center><br><br><br><br>
          <td>No</td>
          <td>@sortablelink('merk', 'Merk')</td>
          <td>@sortablelink('kategori', 'Kategori')</td>
          <td>@sortablelink('jenis_sampah', 'Jenis Sampah')</td>
          <td>@sortablelink('produsen_sampah', 'Asal Perusahaan/Produsen')</td>
          <td>@sortablelink('berat_sampah', 'Berat Sampah (KG)')</td>
          <td>@sortablelink('created_at', 'Tanggal Dibuat')</td>
          @can('is_Admin')
            <td colspan="2">Action</td>
          @endcan
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach($wastes as $waste)
        <tr align=center>
            <td>{{ $i++ }}</td>
            <td align=left>{{$waste->merk}}</td>
            <td align=left>{{$waste->kategori}}</td>
            <td>{{$waste->jenis_sampah}}</td>
            <td>{{$waste->produsen_sampah}}</td>
            <td>{{$waste->berat_sampah}}</td>
            <td>{{$waste->created_at->format('d-m-Y')}}</td>
            
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
  @can('is_Admin')
  <input type="button" onclick="window.location.href = '/wastes/create';" value="Tambah Data"/>
@endcan
<div>
@endsection