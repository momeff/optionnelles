@extends('template')

@section('contenu')
    <h1>UE : {!! $ue->intitule !!}</h1>

    <article>
        {!! $ue->description !!}
        {!! $ue->semestre !!}
    </article>
@stop