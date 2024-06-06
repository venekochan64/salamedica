@extends('adminlte::page')

@section('title', 'Sala Medica')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar pacientes</h1>
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
                <x-adminlte-select name="status" label="Estado">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                </x-slot>
                            <option>Seleccione</option>
                            <option>Borrador</option>
                            <option>Publicado</option>
                </x-adminlte-select>
            </div>
                <div class="row">
                    <x-adminlte-select2 name="type" label="Tipo" data-placeholder="Seleccione" fgroup-class="col-md-6">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-info">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                        </x-slot>
                                    <option/>
                                    <option>Cita</option>
                                    <option>Emergencia</option>
                                    <option>Revision</option>
                    </x-adminlte-select2>
                </div>
                <div class="row">
                    @php
                    $config = ['format' => 'YYYY-MM-DD'];
                    @endphp
                    <x-adminlte-input-date name="date" :config="$config" placeholder="Seleccionar fecha" label="Fecha" fgroup-class="col-md-6">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-info">
                                <i class="fas fa-clock"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input-date>
                </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <x-adminlte-button label="Registrar" theme="primary" icon="fas fa-save"/>
                        </div>
                    </div>
</div>
@stop
