@extends('master')
@section('title', 'Cutler Code')
@section('content')
<h1>Cutler Code</h1>
<p>Welcome to Cutler Code where we help kickstart your software and online presence</p>
<h2>What We Offer</h2>
<div class="grid">
    <div class="offering-card">
        <h4>Website Building/Maintance</h4>
        <p>Includes deploying, hosting, and maintaining the site.</p>
    </div>
    <div class="offering-card">
        <h4>Web/Mobile Applications</h4>
        <p>Includes deploying/publishing, hosting, and maintaining the applications</p>
    </div>
    <div class="offering-card">
        <h4>Software Consulting</h4>
        <p>Includes guidance on planning, designing, and implementating software</p>
    </div>
</div>
<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: auto;
        gap: 1rem;
        margin-top: 2%;
    }
    .offering-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: 3px solid black;
        border-radius: 6px;
        background-color: #ffa900;
    }
    h2 {
        margin-top: 3%;
    }
    .offering-card p, .offering-card h4 {
        padding-top: 0.5rem;
    }
    h4 {
        border-bottom: 2px solid black;
        width: 75%;
        text-align: center;
    }
</style>
@endsection