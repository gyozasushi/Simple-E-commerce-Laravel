@extends('layout.home')
@section('title', 'FAQ')

@section('content')

<!-- FAQ -->
<section class="section-wrap faq mt-0 pt-0 ">
        <div class="container" >
          <div class="row">
          <div class="col-sm-9 mb-20"><img src="/kelompok/nanya.jpg" alt=""></div>
            <div class="col-sm-8">
              <h2 class="mb-20"><small>Pertanyaan Pengiriman</small></h2>

              <div class="panel-group accordion mb-50" id="accordion-1">
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="plus">Kalian menggunakan jasa pengiriman apa?<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body">
                     Untuk saat ini kami belum memiliki jasa ekspedisi sendiri,oleh karena itu kami bekerja sama dengan penyedia jasa ekspedisi seperti JNT,JNE.Terimakasih
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="plus">Apakah Lama Untuk Pengiriman Barangnya?<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">
                     Untuk Proses Pengiriman Kami Pastikan Ketika Data Orderan Anda Sudah Masuk Ke Dalam Admin,Maka Kami Akan Secepatnya Untuk Mengemas Orderan Anda dengan Hati-Hati.Jika Terjadi Keterlambatan Di mohon Untuk Melacak Nomor Resi Yang Akan Kami Berikan
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="plus">Bisa Gak Anterin selain Jakarta?<span></span>
                    </a>
                  </div>
                  <div id="collapse-3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Bisa dong Untuk Semua Provinsi Akan Tetapi Tetap Akan Dikenakan Biaya Pengiriman.
                    </div>
                  </div>
                </div>
              </div> <!-- end accordion -->


              <h2 class="mb-20 mt-80"><small>Pertanyaan Pembayaran</small></h2>

              <div class="panel-group accordion mb-50" id="accordion-2">
                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-4" class="minus">Apa Metode Pembayaran Yang Bisa Dilakukan?<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-4" class="panel-collapse collapse in">
                    <div class="panel-body">
                      Untuk saat ini kami hanya menerima metode pembayaran secara manual seperti bank transfer,caranya yaitu anda mengirimkan dana terlebih dahulu ke rekening kami yang sudah tertera di halaman pembayaran nantinya,setelah dana masuk ke rekening kami kami akan langsung mempackaging barang orderan anda dengan cepat.
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-5" class="plus">Apakah Aman Untuk Pembayaran Ini<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-5" class="panel-collapse collapse">
                    <div class="panel-body">
                     Kami Jamin untuk pembayran ini aman 100% jika ada masalah terhadap barang yang dikirim seperti gagal untuk pengiriman , maka kami akan 100% pengembalian uang ke rekening anda.terimakasih.
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-6" class="plus">Apa bisa kasbon untuk pembayaran<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-6" class="panel-collapse collapse">
                    <div class="panel-body">
                     mohon maaf untuk pembayaran kasbon kami tidak bisa menerimanya dikarenakan nantinya data orderan anda tidak akan masuk kedalam sistem kami
                    </div>
                  </div>
                </div>

                <div class="panel">
                  <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-7" class="plus"> jika ada kesalahan nominal pengiriman,apakah dana akan dikembalikan untuk kelebihan dari nominal harga barang?<span>&nbsp;</span>
                    </a>
                  </div>
                  <div id="collapse-7" class="panel-collapse collapse">
                    <div class="panel-body">
                     jika anda salah mengirim kan nominal untuk pembayaran seperti kelebihan dlam nominalnya maka kami akan kirim kan langsung lebihnya ke dalam rekening akun bank anda
                    </div>
                  </div>
                </div>

              </div> <!-- end accordion -->

            </div> <!-- end col -->

        <aside class="sidebar col-sm-3 " style="position: relative;left:10%;top:110%;">
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

            </aside> <!-- end col -->

          </div>
        </div>
      </section> <!-- end faq -->
@endsection