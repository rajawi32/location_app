@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-start align-items-center home-page-container p-4 gap-5">
            <div class="item item-1 d-flex flex-column justify-content-evenly">
                <div class="icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="count">
                    100
                </div>
                <div class="table-name">
                    Users
                </div>
            </div>
            <div class="item item-2 d-flex flex-column justify-content-evenly">
                <div class="icon">
                    <i class="bi bi-shop"></i>
                </div>
                <div class="count">
                    100
                </div>
                <div class="table-name">
                    Magasins
                </div>
            </div>
            <div class="item item-3 d-flex flex-column justify-content-evenly">
                <div class="icon">
                    <i class="bi bi-person-check"></i>
                </div>
                <div class="count">
                    100
                </div>
                <div class="table-name">
                    Locataires
                </div>
            </div>
            <div class="item item-4 d-flex flex-column justify-content-evenly">
                <div class="icon">
                    <i class="bi bi-journal-text"></i>
                </div>
                <div class="count">
                    100
                </div>
                <div class="table-name">
                    Contrats
                </div>
            </div>
        </div>
    </div>
@endsection
