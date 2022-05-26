<!-- Desa Field -->
<div class="col-sm-12">
    {!! Form::label('Desa', 'Desa:') !!}
    <p>{{ $dataListrikdesa->Desa }}</p>
</div>

<!-- Penggunalistrikpln Field -->
<div class="col-sm-12">
    {!! Form::label('PenggunaListrikPln', 'Penggunalistrikpln:') !!}
    <p>{{ $dataListrikdesa->PenggunaListrikPln }}</p>
</div>

<!-- Penggunanonlistrikpln Field -->
<div class="col-sm-12">
    {!! Form::label('PenggunaNonListrikPln', 'Penggunanonlistrikpln:') !!}
    <p>{{ $dataListrikdesa->PenggunaNonListrikPln }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataListrikdesa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataListrikdesa->updated_at }}</p>
</div>

