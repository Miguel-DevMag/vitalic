<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/sobre', 'about')->name('about');
Route::view('/cadastro-paciente', 'paciente')->name('paciente');
Route::view('/agendamento', 'agendamento')->name('agendamento');
Route::view('/cadastro-medicos', 'medicos')->name('medicos');
Route::view('/lista-consultas', 'consultas')->name('consultas');
