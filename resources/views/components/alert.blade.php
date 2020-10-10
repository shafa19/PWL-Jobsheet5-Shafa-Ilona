<div class="alert alert-danger">
{{ $slot }} </div>

<!-- contoh view yang menerapkan component alert -->
@extends('layouts.app')

@component("alert")

<b>Tulisan ini akan mengisi variabel $slot</b>
@endcomponent