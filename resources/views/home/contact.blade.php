@extends('layout.home')
@section('title', 'contact us')
@section('content')
 <!-- Contact -->
 <section class="section-wrap contact pb-40">
        <div class="container">
          <div class="row">

            <div class="col-md-8 mb-40">
                <img src="/kelompok/contact.jpg" alt="">
            </div> <!-- end col -->

            <div class="col-md-3 col-md-offset-1 col-sm-5 mb-40">
              <div class="contact-item" style="font-size: 120%;">
                <h6>Alamat</h6>
                <address>Tisma Store<br>
                Jalan Adil 2<br>
                Cipayung<br>
                Jakarta Timur</address>
              </div> <!-- end address -->

              <div class="contact-item" style="font-size: 120%;">
                <h6>Informasi</h6>
                <ul>
                  <li>
                    <i class="fa fa-envelope"></i><a href="mailto:tismafs@gmail.com">tismafs@gmail.com</a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i><span>+62 8138 7272 149</span>
                  </li>
                 
                </ul>               
              </div> <!-- end information -->

              <div class="contact-item" style="font-size: 120%;">
                <h6>Jam Kerja</h6>
                <ul>
                  <li>Senin - Jumat : 08.00 - 19.00</li>
                  <li>Sabtu : 09.00 - 20.00</li>
                  <li>Minggu (Libur)</li>
                </ul>               
              </div> <!-- end business hours -->
            </div>

          </div>
        </div>
      </section> <!-- end contact -->
      @endsection