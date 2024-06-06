@extends('adminlte::page')

@section('title', 'Sala Medica')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Personal Medico</h1>
@stop

@section('content')
<div>
    <div class="row">
        <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese nombre"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
        <div class="row">
            <x-adminlte-textarea name="description" label="Descripcion"
            placeholder="Descripcion del paciente" fgroup-class="col-md-6">
            </x-adminlte-textarea>
        </div>
            <div class="row">
                <x-adminlte-select name="type" label="tipo">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                </x-slot>
                            <option>Seleccione</option>
                            <option>Enfermero</option>
                            <option>Doctor</option>
                </x-adminlte-select>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button label="Registrar" theme="primary" icon="fas fa-save"/>
                </div>
            </div>
</div>
@stop
