@extends('layouts.default')

<!-- 导航栏 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/">玛卡巴卡的个人博客</a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a href="#" class="link-success">PHP</a>
    </li>
    </ul>
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
        <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
    </ul>
    </div>
</nav>

<!-- 轮播图 -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div>
<div class="carousel-inner">
    <div class="carousel-item active" align="center">
        <img src="https://cdn.learnku.com/uploads/images/201906/24/7215/FYie7iwNLR.jpg!large" width="1600px" height="600px">
    </div>
    <div class="carousel-item" align="center">
        <img src="https://cdn.learnku.com/uploads/images/201906/24/7215/mjyWS7kMKR.jpg!large" width="1600px" height="600px">
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<!-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <a href="#" class="btn btn-primary">php</a>
    </div>
</div> -->
