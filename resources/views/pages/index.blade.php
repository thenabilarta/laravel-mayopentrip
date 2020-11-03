@extends('layouts.app')

@section('container')
<div class="container py-4">
  <div data-skyscanner-widget="SearchWidget" data-destination-name="'Edinburgh'" data-origin-name="'Jakarta'"
    data-button-text-size="1">
  </div>
</div>

<div class="container py-3">
  <div class="row" style="width: 80%; margin: 0 auto">
    <div class="col d-flex align-items-center flex-wrap justify-content-center p-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/destination/inggris.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Inggris Raya</h5>
          <p class="card-text">
            Pesona klasik dataran Inggris dan Irlandia
          </p>
          <a href="#" class="btn btn-info">Pelajari</a>
          <a href="#" class="btn btn-primary">Blog</a>
        </div>
      </div>
    </div>

    <div class="col d-flex align-items-center justify-content-center p-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/destination/eropabarat.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Eropa Barat</h5>
          <p class="card-text">
            Deretan negara wajib dikunjungi seperti swiss, italia, jerman, dan prancis.
          </p>
          <a href="#" class="btn btn-info">Pelajari</a>
          <a href="#" class="btn btn-primary">Blog</a>
        </div>
      </div>
    </div>

    <div class="col d-flex align-items-center justify-content-center p-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/destination/amerika.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Amerika Serikat</h5>
          <p class="card-text">
            Dua ujung terbaik Amerika, California dan New York!
          </p>
          <a href="#" class="btn btn-info">Pelajari</a>
          <a href="#" class="btn btn-primary">Blog</a>
        </div>
      </div>
    </div>

    <div class="col d-flex align-items-center justify-content-center p-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/destination/kanada.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Kanada</h5>
          <p class="card-text">
            Suasana alam asri Kanada berpadu dengan kota-kota maju seperti Vancouver dan Toronto.
          </p>
          <a href="#" class="btn btn-info">Pelajari</a>
          <a href="#" class="btn btn-primary">Blog</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="items">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>bu may sebagai tpur leader sangat kopperatif selalu bertanya ke peserta kita mau nya bagaimana dan
            seperti apa tidak memaksakan kehendak.. dan soo pasti harga nya sangat murcee.. bisa dibandingkan dengan
            tour2 yg lain.. ahhhh ayooo kita jalan2 lagi bu.. tak sabar menanti trip2 ibu selanjutnya😘😘😘😘😘</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/ivo.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Dr ivo fitrian SpOG</h4>
              <p class="cust-profession">Dokter</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Berkesan sekali dengan perjalanan mayopentrip, selain terjangkau, destinasi bisa di sesuaikan dan kita
            nyaman walau bawa orang tua yang sudah sepuh... maju terus yaa</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/dumasari.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Dumasari</h4>
              <p class="cust-profession">Pegawai BUMN</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Pernah ikut May Open Trip ke Cina di Maret 2018 dan UK-Ireland di Agustus 2019. Asik dan santuy. Moga bisa
            join trip ke Kanada, New Zealand, Afrika, Amerika Latin dll. Semangat terus buat bikin open trip ke
            destinasi keceh badai lainnya yaa...</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"><img class="profile-pic" src="img/testimonial/ajenk.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Ajenk</h4>
              <p class="cust-profession">Karyawati</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Happy bareng Mayopentrip.</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/asrie.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Asrie</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Sudah 3X liburan bareng mayopentrip Iran,China dan Rusia semua paketnya murah tapi bukan kaleng-kakengan
            semua fasilitasnya nyaman.Next trip utk liburan bareng mayopentrip lagi dong.</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/dewi.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Dewi</h4>
              <p class="cust-profession">Ibu rumah tangga</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Joint Mayopentrip pasti ketagihan, destinasi menarik dan complete (banyak), hotel berbintang, akrab sesama
            peserta krn bisa masak bareng, berbagi perbekalan, pasti puas...buruan cobain..enjoy your trip and excited
            experience</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/endang.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Endang</h4>
              <p class="cust-profession">Pengusaha</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Selama perjalanan tour bersama uni, sangat menyenangkan, kekeluargaan, mengikuti keingginan, mendengarkan
            dan masukan dr peserta tour , semua perjalanan menjadi berkesan dan uni sangat perhatian.Semoga uni sll
            sehat dan sll bs memandu
            kami tour keliling dunia Aamiin YRA love you uni may😘😘😘</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/ida.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Ida Farida</h4>
              <p class="cust-profession">Notaris</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>pokoknya happy bisa puas kebeberapa tempat Indah yang kayanya kalau pake travel ternama bisa mahal banget
            ... </p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/irma.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Irma</h4>
              <p class="cust-profession">Ibu rumah tangga</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Smg lebih baik lagi ...sukses selalu!</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/liza.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Liza Irvan</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Sdh 3x ikut mayopentrip.. So far semua berending happy..destinasi yg dipilih agak extraordinary..kluar dari
            pakem umum yg biasa mementingkan efisiensi jarak dan waktu. Justru itu yg bikin keinginan kita terakomodasi.
            Maju trs mayopentrip..insya Allah 2021 daftar lg...</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/marwati.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Marwati W</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Waktu ikut grup Jordan aqso palestina sangat berkesan dan kekeluargaan, fasilitasnya pun lengkap dan
            memuaskan</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/maryani.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Maryani Mas'ud</h4>
              <p class="cust-profession">Dokter</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Kapan nge-trip lagiii... Nyaman.....grup spt keluarga sendiri...flexible...tour leadernya kerennn....gabung
            yukkk....</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/putiri.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Putiri Katili</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Saya senang. Seperti sedang berlibur bersama keluarga. Semuanya akrab. Penginapan bagus. Makanan enak.
            Destinasi lengkap dan berkualitas. Biaya murah. Jujur dan amanah.</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/sidiq.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Sidiq Gandi</h4>
              <p class="cust-profession">ASN</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Maju teruuuss</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/tetri.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Tettri Vivi</h4>
              <p class="cust-profession">Notaris</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Lanjutkan.. Sy ikut 3 kali NZ, Rusia dan Canada.. pokoknya keren</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/yani.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Yani</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
        <div class="template-demo">
          <p>Yuk ceritain kesan perjalanan kamu bersama mayopentrip ke berbagai penjuru dunia!</p>
        </div>
        <hr>
        <div class="row">
          <div class="col-2"> <img class="profile-pic" src="img/testimonial/orang.png">
          </div>
          <div class="col-10">
            <div class="profile">
              <h4 class="cust-name">Kamu</h4>
              <p class="cust-profession">Traveler</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>
@endsection