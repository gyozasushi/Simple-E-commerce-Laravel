@extends('layout.home')
@section('content')
<section class="hero-wrap relative">
        <div>
          <div class="full-screen-hero">
            <div class="container" id="fs-container">
              <div class="hero-holder">
                <div class="hero-message style-2 dark">
                  <div class="hero-text-holder" style="background-color: rgba(243, 216, 125 ,0.6);border-radius:20px;">
                    <h2 class="hero-subtitle" style="color: #ffff; font-size:210%;  ">Tisma Fashion Brand Lokal</h2>
                    <h1 class="hero-title" style="font-size:270%;">Era Baru</h1>
                    <p style="color: #ffff;font-size:120%;font-weight:bold;">Tisma Fashion,destinasi fashion online yang menghadirkan brand lokal.<br>Dengan Kualitas yang bagus membuatmu lebih keren.</p>
                    <div class="buttons-holder">
                    @if (Auth::guard('webmember')->check())
                      <a href="/products/2" class="btn btn-lg btn-dark" style="margin-bottom:10%;"><span>Belanja sekarang</span></a>
                      @else
                      <a href="/login_member" class="btn btn-lg btn-dark" style="margin-bottom:10%;"><span>Belanja sekarang</span></a>
                      @endif
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end hero slider -->

      

      

@endsection