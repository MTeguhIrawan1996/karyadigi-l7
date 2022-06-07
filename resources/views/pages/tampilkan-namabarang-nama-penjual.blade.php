<table class="table table-hover scroll-horizontal-vertical w-100" id="crudTablePembayaran">
<thead>
  <tr>
    <th>Nama Barang</th>
    <th>nama Penjual</th>
  </tr>
</thead>
<tbody>
  @foreach ($query as $item)
        {{-- untuk nama barang harus diinialisasi dengan nama tabel didatabase yaitu Barang --}}
        <td>{{ $item->barang->nama_barang }}</td>
        <td>{{ $item->nama_penjual }}</td>
  @endforeach


</tbody>
</table>