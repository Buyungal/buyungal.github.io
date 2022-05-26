<!-- Listrikpln Field -->
<div class="col-sm-12">
    {!! Form::label('ListrikPln', 'Listrikpln:') !!}
    <p>{{ $dataListrik->ListrikPln }}</p>
</div>

<!-- Listriknonpln Field -->
<div class="col-sm-12">
    {!! Form::label('ListrikNonPln', 'Listriknonpln:') !!}
    <p>{{ $dataListrik->ListrikNonPln }}</p>
</div>

<!-- Bukanpenggunalistrik Field -->
<div class="col-sm-12">
    {!! Form::label('BukanPenggunaListrik', 'Bukanpenggunalistrik:') !!}
    <p>{{ $dataListrik->BukanPenggunaListrik }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataListrik->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataListrik->updated_at }}</p>
</div>

