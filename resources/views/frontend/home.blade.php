@extends('layouts.frontend')
@section('content')
<style>
    button {
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px;
    border-radius: 25px ;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span {
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span {
    width:100% ;
}

button:hover{
   border: none; 
}
</style>
<div class="content">
    <h1>Ayo Mulai Belajar</h1>
    <p>Studying Is Tiring, But It Will Be Even More Tiring If You Don't Study At This Time</p>
    {{-- <div>
        <button type="button"><a href="{{ url('/book') }}" style="text-decoration: none; color: white;" >MULAI</a><span></span></button>
    </div> --}}
</div>

@endsection