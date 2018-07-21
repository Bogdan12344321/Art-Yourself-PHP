@extends('layout.master')
@extends('layout.nav')

<div class="content">
    <img src="/image/Art.jpg"/>
</div>
<div class="header-front-page">
    <h1> Art Yourself</h1>
</div>
<menu class="menu-content">
    @include('posts.post')
</menu>

