<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataSekolahDasar->Desa }}</p>
</div>

<!-- Jumlahsekolahdasar Field -->
<div class="col-sm-12">
    {!! Form::label('JumlahSekolahDasar', 'Jumlahsekolahdasar:') !!}
    <p>{{ $dataSekolahDasar->JumlahSekolahDasar }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataSekolahDasar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataSekolahDasar->updated_at }}</p>
</div>

