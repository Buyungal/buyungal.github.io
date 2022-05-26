<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataSMK->Desa }}</p>
</div>

<!-- Jumlahsekolahmenengahkejuruan Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahMenengahKejuruan', 'Jumlahsekolahmenengahkejuruan:') !!}
    <p>{{ $dataSMK->JumlahSekolahMenengahKejuruan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataSMK->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataSMK->updated_at }}</p>
</div>

