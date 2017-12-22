@extends('master')

@section('links')
    <link rel="stylesheet" href="/css/payTicket.css">
@endsection


@section('content')
    <h1>Bestelling gegevens</h1>
    <div class="orderDetail">
        <div class="order">
            <div class="filmnaam">
                <h2>Jumanji</h2>
            </div>
            <div class="datum">
                <h4>Datum:</h4>
                <h5>22-12-2017</h5>
            </div>
            <div class="zitplaats">
                <h4>Zitplaats:</h4>
                <h5>Rij 4, stoel 6,7,8,9</h5>
            </div>
            <div class="filmzaal">
                <h4>Filmzaal:</h4>
                <h5>Zaal 3</h5>
            </div>
            <div class="leeftijd">
                <h4>Leeftijd:</h4>
                <h5>18+</h5>
            </div>
            <div class="aanvangFilm">
                <h4>Aanvang film:</h4>
                <h5>16.30 Uur</h5>
            </div>
            <div class="filmduur">
                <h4>Filmduur:</h4>
                <h5>135 Minuten</h5>
            </div>
            <div class="prijs">
                <h4>Prijs:</h4>
                <h5>2x zitplaats €14,00 = €28,00</h5>
            </div>
        </div>
        <img class="img_movie" src="img/bioscoop/jumanji.jpg" alt="" height="400" width="340">
    </div>


@endsection