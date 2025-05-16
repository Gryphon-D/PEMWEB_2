<h3>{{ $judul }}</h3>
<table border="1" widh="100%" class="tables">
    <thead>
            <th>no</th>
            <th>kode</th>
            <th>jurusan</th>
            <th>kaprodi</th>
    </thead>
    <tbody>
    @php $nomor = 1; @endphp
    @foreach ($ar_prodi as $p)
        <tr>
            <td>{{ $nomor }}</td>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->kaprodi }}</td>
        </tr>
        @php $nomor++; @endphp
    @endforeach
</tbody>
</table>
