<?php
require_once('const.php');
?>
<!doctype html>
<html lang="id">

<head>
  <!-- Metas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="author" content="Vicentra Dev" />
  <meta name="description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta name="keywords" content="mesin percetakan, mesin cetak offset, mesin digital printing, mesin cetak spanduk, mesin cetak stiker, mesin percetakan murah, jual mesin percetakan, harga mesin percetakan, distributor mesin percetakan, mesin percetakan terbaik">
  <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />

  <title>Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik</title>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />
  <meta property="og:description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta property="og:image" content="https://mesinpercetakan.com/assets/images/logo-vicentra-black.webp" />
  <meta property="og:url" content="https://mesinpercetakan.com" />
  <meta property="og:site_name" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Vicentra - Distributor Mesin Percetakan Offset, Digital & Layanan Terbaik" />
  <meta name="twitter:description"
    content="Vicentra adalah penyedia mesin percetakan terpercaya di Indonesia, menawarkan mesin offset, digital, sablon, spanduk, stiker, serta layanan purna jual profesional untuk bisnis percetakan besar maupun rumahan. Hubungi kami sekarang!" />
  <meta name="twitter:image" content="https://mesinpercetakan.com/assets/images/logo-vicentra-black.webp" />
  <meta name="twitter:site" content="https://mesinpercetakan.com" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7FPFX21LX2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7FPFX21LX2');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NDJDBD5N');
  </script>
  <!-- End Google Tag Manager -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDJDBD5N"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="app">
    <!-- HEADER -->
    <header class="border-b-2 py-4">
      <div class="lg:w-[80vw] mx-5 lg:mx-auto flex justify-between items-center relative">
        <a href="https://vicentra.co.id" class="beranda">
          <img src="./assets/images/logo-vicentra-black.webp" alt="logo-vicentra-black" class="h-[2.375rem]">
        </a>
        <div class="lg:hidden">
          <i :class="[isMenuShow ? 'fa-solid fa-xmark text-2xl' : 'fa-solid fa-bars text-2xl']" class=""
            @click="toggleMenu"></i>
        </div>
        <ul :class="[isMenuShow ? 'visible' : 'invisible']"
          class="lg:visible flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-5 absolute lg:static top-[3.125rem] left-0 right-0 bg-white lg:bg-transparent shadow lg:shadow-none p-2 lg:p-0 rounded lg:rounded-none">
          <li><a href="https://vicentra.co.id" class="beranda hover:underline">Beranda</a></li>
          <li><a href="https://vicentra.co.id/product/mesin/digital-printing"
              class="semua_produk hover:underline">Produk</a>
          </li>
          <li><a href="https://vicentra.co.id/terms-and-conditions"
              class="layanan_dan_perbaikan hover:underline">Layanan dan Perbaikan</a>
          </li>
          <li><a href="https://vicentra.co.id/about-us" class="tentang_kami hover:underline">Tentang Kami</a></li>
        </ul>
      </div>
    </header>
    <!-- HEADER -->

    <!-- PRODUCT SECTION -->
    <section>
      <div class="lg:w-[80vw] mx-5 lg:mx-auto grid lg:grid-cols-12 lg:gap-10 mt-10">
        <div class=" col-span-12 lg:col-span-8 order-first lg:order-none">
          <h1 class="text-3xl font-semibold text-gray-800">Butuh Mesin Percetakan? Inilah Rekomendasi Terbaik untuk Kualitas Hasil Maksimal Dari Vicentra!</h1>
          <figure>
            <img
              src="https://vicentra.co.id/storage/post-thumbnails/unboxing-dan-uji-coba-mesin-cnc-laser-co2-fortis-ntl-1390.webp"
              alt="unboxing-dan-uji-coba-mesin-cnc-laser-co2-fortis-ntl-1390" class="mt-[1.875rem] rounded-lg w-full">
            <figcaption class="text-center">unboxing dan uji coba mesin cnc laser co2 fortis ntl 1390</figcaption>
          </figure>
          <div class="mt-[1.875rem]">
            <p class="text-justify">
              Apakah Anda sedang mencari mesin percetakan yang andal untuk meningkatkan kualitas dan efisiensi bisnis Anda? Kami telah mengumpulkan beberapa rekomendasi mesin percetakan terbaik, mulai dari mesin cetak offset, mesin digital printing, hingga mesin cetak spanduk dan mesin cetak stiker yang cocok untuk berbagai kebutuhan. Temukan pilihan mesin percetakan murah dengan kualitas tinggi dari berbagai distributor mesin percetakan terpercaya. Kami juga menyediakan informasi mengenai harga mesin percetakan terbaru serta tempat jual mesin percetakan yang bisa Anda pertimbangkan. Yuk, simak daftarnya di bawah ini dan pilih mesin yang paling sesuai untuk bisnis Anda!
            </p>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="text-xl font-semibold text-gray-800">NEU Jet C4K MESIN PRINTER OUTDOOR C4K 512i</h2>
            <a href="https://vicentra.co.id/product/mesin/digital-printing/outdoor/neu-jet-mpoc4k" target="_blank">
              <figure class="mt-4">
                <img src="./assets/images/mesin/new-jet-c4k.webp"
                  alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full lg:w-[50%]">
                <figcaption class="text-center">printer-outdoor-neu-jet-c4k</figcaption>
              </figure>
            </a>
            <p class="text-justify mt-4">
              Butuh printer untuk kebutuhan outdoor dengan hasil cetak tajam dan tahan lama? <a href="https://vicentra.co.id/product/mesin/digital-printing/outdoor/neu-jet-mpoc4k" class="underline">NEU Jet C4K</a> siap memenuhi kebutuhan Anda. Ideal untuk mencetak spanduk, baliho, dan media luar ruang lainnya. Mesin ini sangat cocok bagi Anda yang ingin terjun ke bisnis periklanan atau jasa percetakan outdoor. Klik gambar untuk detail produk.
            </p>
            <div class="grid grid-cols-2 gap-4">
              <a href="https://vicentra.co.id/product/mesin/digital-printing/outdoor/neu-jet-mpoc4k" target="_blank">
                <figure class="mt-4">
                  <img src="https://vicentra.co.id/storage/product-medias/001-printer-outdoor-neu-jet-mpoc4k-002.webp"
                    alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full">
                  <figcaption class="text-center">printer-outdoor-neu-jet-c4k</figcaption>
                </figure>
              </a>
              <a href="https://vicentra.co.id/product/mesin/digital-printing/outdoor/neu-jet-mpoc4k" target="_blank">
                <figure class="mt-4">
                  <img src="https://vicentra.co.id/storage/product-medias/001-printer-outdoor-neu-jet-mpoc4k-003.webp"
                    alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full">
                  <figcaption class="text-center">printer-outdoor-neu-jet-c4k</figcaption>
                </figure>
              </a>
            </div>
            <p class="text-justify mt-4">
              Kami perkenalkan Mesin Printer <a href="https://vicentra.co.id/product/mesin/digital-printing/outdoor/neu-jet-mpoc4k" class="underline">NEU Jet C4K</a>, printer canggih yang dilengkapi dengan 4 printhead Piezo-Electric tipe 512i (30PL) untuk mendukung pencetakan dengan kecepatan dan kualitas tinggi. Printer ini menggunakan sistem Roll-to-Roll yang fleksibel, serta mendukung berbagai mode kecepatan cetak, yaitu hingga 120 m² pada 2 pass, 80 m² pada 3 pass, dan 62,5 m² pada 4 pass. Dengan software RIP Photoprint, printer ini mampu menghasilkan detail yang tajam pada berbagai media.
            </p>
            <h2 class="font-semibold mt-4">Keunggulan:</h2>
            <ul class="list-disc pl-4">
              <li>
                4 printhead Piezo-Electric 512i (30PL) untuk hasil cetak berkualitas tinggi.
              </li>
              <li>
                Kecepatan cetak hingga 120 m² (2 pass) untuk produksi besar.
              </li>
              <li>
                Sistem Roll-to-Roll yang fleksibel untuk berbagai jenis media.
              </li>
              <li>
                Sistem suction material yang dapat disesuaikan untuk stabilitas media.
              </li>
              <li>
                Lampu LED area cetak untuk memudahkan pengawasan proses cetak.
              </li>
              <li>
                Konsumsi daya optimal sebesar 4000 watt.
              </li>
            </ul>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="text-xl font-semibold text-gray-800">Nocai NC-UV0609MAX MESIN UV FLATBED NOCAI MAX - UV 0609 PEIII</h2>
            <a href="https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609max" target="_blank">
              <figure class="mt-4">
                <img src="https://vicentra.co.id/storage/product-medias/019-printer-uv-nocaimax0609peiii-001.webp"
                  alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full lg:w-[50%]">
                <figcaption class="text-center">printer-uv-flatbed-nocai-nc-uv0609max</figcaption>
              </figure>
            </a>
            <p class="text-justify mt-4">
              Untuk Anda yang mencari mesin cetak UV dengan fleksibilitas tinggi, <a href="https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609max" class="underline">Nocai NC-UV0609MAX</a> menawarkan kemampuan mencetak pada berbagai permukaan dengan hasil memukau. Cocok untuk mencetak pada kaca, logam, kayu, dan bahan lainnya. Mesin ini pas bagi Anda yang ingin membuka usaha di bidang percetakan custom seperti casing handphone, panel dekoratif, atau merchandise eksklusif. Klik gambar untuk mengetahui lebih lanjut.
            </p>
            <div class="grid grid-cols-2 gap-4">
              <a href="https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609max" target="_blank">
                <figure class="mt-4">
                  <img src="https://vicentra.co.id/storage/product-medias/019-printer-uv-nocaimax0609peiii-002.webp"
                    alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full">
                  <figcaption class="text-center">printer-uv-nocai-nc-uv0609max</figcaption>
                </figure>
              </a>
              <a href="https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609max" target="_blank">
                <figure class="mt-4">
                  <img src="https://vicentra.co.id/storage/product-medias/019-printer-uv-nocaimax0609peiii-003.webp"
                    alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full">
                  <figcaption class="text-center">printer-uv-nocai-nc-uv0609max</figcaption>
                </figure>
              </a>
            </div>
            <p class="text-justify mt-4">
              Kami perkenalkan <a href="https://vicentra.co.id/product/mesin/digital-printing/uv/nocai-nc-uv0609max" class="underline">Nocai NC-UV0609MAX</a>, printer UV flatbed profesional yang dilengkapi dengan 3 printhead EPSON i3200-U1 Micro Piezo dengan teknologi UV curing modern. Mesin ini dirancang untuk menghasilkan cetakan berkualitas tinggi dengan resolusi maksimal hingga 2400dpi.
            </p>
            <p class="text-justify mt-4">
              Mesin ini menggunakan sistem CISS (Continuous Ink Supply System) dan teknologi UV LED lamp dengan air cooling untuk hasil optimal. Mampu menangani material dengan ketebalan 0-180 mm dan diameter silinder 30-120 mm untuk mode rotary.
            </p>
            <h2 class="font-semibold mt-4">Keunggulan:</h2>
            <ul class="list-disc pl-4">
              <li>
                3 printhead EPSON presisi tinggi dengan nozzle 600×4
              </li>
              <li>
                Resolusi ultra tinggi 2400dpi untuk detail maksimal
              </li>
              <li>
                Mode cetak CMYK+W dan CMYK+W+V (Varnish)
              </li>
              <li>
                Sistem tinta kontinyu untuk produksi efisien
              </li>
              <li>
                Motor servo dengan silent linear guideway dan screw drive
              </li>
              <li>
                Sistem pengeringan UV LED dengan air cooling
              </li>
              <li>
                Area cetak fleksibel (600×900mm / 600×870mm dengan varnish)
              </li>
              <li>
                Mendukung berbagai material printing
              </li>
              <li>
                Konstruksi premium dengan berat 226 kg
              </li>
              <li>
                Sistem operasi yang stabil dengan RAM >6Gb
              </li>
            </ul>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="text-xl font-semibold text-gray-800">FORTIS 490 ST MESIN POTONG KERTAS FORTIS MP490 ST</h2>
            <a href="https://vicentra.co.id/product/mesin/finishing/potong-kertas/fortis-mpkfmp490st" target="_blank">
              <figure class="mt-4">
                <img src="https://vicentra.co.id/storage/product-medias/028-web-paper-cutting-fortis-490st.webp"
                  alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full lg:w-[50%]">
                <figcaption class="text-center">potong-kertas-fortis-490-st</figcaption>
              </figure>
            </a>
            <p class="text-justify mt-4">
              Memastikan potongan kertas yang presisi adalah kunci dalam dunia percetakan. <a href="https://vicentra.co.id/product/mesin/finishing/potong-kertas/fortis-mpkfmp490st" class="underline">FORTIS 490 ST</a> hadir dengan teknologi terkini untuk memastikan setiap potongan sempurna. Ideal untuk usaha percetakan buku, brosur, atau dokumen lainnya.
            </p>
            <p class="text-justify mt-4">
              Kami perkenalkan <a href="https://vicentra.co.id/product/mesin/finishing/potong-kertas/fortis-mpkfmp490st" class="underline">FORTIS 490 ST</a>, mesin potong kertas elektrik yang dirancang dengan teknologi modern untuk kebutuhan industri percetakan. Mesin ini menggunakan sistem electrical motor press dengan pendorong kertas elektrik untuk operasi yang efisien.
            </p>
            <p class="text-justify mt-4">
              Mesin ini dilengkapi dengan layar touchscreen 7 inch dan sistem memori multiple untuk kemudahan pengoperasian. Dengan fitur keamanan infra red sensor, mesin ini menjamin keselamatan operator selama penggunaan.
            </p>
            <h2 class="font-semibold mt-4">Keunggulan:</h2>
            <ul class="list-disc pl-4">
              <li>Kapasitas potong lebar hingga 490 mm</li>
              <li>Tinggi tumpukan kertas maksimal 80 mm</li>
              <li>Akurasi pemotongan presisi (±0.4 mm)</li>
              <li>Sistem press elektrik untuk hasil konsisten</li>
              <li>Layar touchscreen 7 inch untuk kontrol mudah</li>
              <li>Multiple memory untuk penyimpanan program</li>
              <li>Sensor infra merah untuk keamanan</li>
              <li>Pendorong kertas elektrik otomatis</li>
              <li>Konstruksi kokoh dengan berat 231 kg</li>
              <li>Operasi yang aman dan efisien</li>
            </ul>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="text-xl font-semibold text-gray-800">FORTIS BM-600 A3 MESIN JILID BUKU OTO A3 BM600</h2>
            <a href="https://vicentra.co.id/product/mesin/finishing/book-binding/fortis-mjboa3" target="_blank">
              <figure class="mt-4">
                <img src="https://vicentra.co.id/storage/product-medias/017-web-book-binding-bm-600.webp"
                  alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full lg:w-[50%]">
                <figcaption class="text-center">book-binding-fortis-bm-600-a3</figcaption>
              </figure>
            </a>
            <p class="text-justify mt-4">
              Ingin hasil jilid buku yang rapi dan profesional? <a href="https://vicentra.co.id/product/mesin/finishing/book-binding/fortis-mjboa3" class="underline">FORTIS BM-600 A3</a> menawarkan kemudahan dan efisiensi dalam proses penjilidan. Cocok untuk usaha percetakan buku, majalah, atau laporan tahunan.
            </p>
            <p class="text-justify mt-4">
              Kami perkenalkan <a href="https://vicentra.co.id/product/mesin/finishing/book-binding/fortis-mjboa3" class="underline">FORTIS BM-600 A3</a>, mesin binding otomatis profesional yang dirancang untuk industri percetakan dan finishing buku. Mesin ini menggunakan sistem double roller dan side glue roller yang dilengkapi dengan teknologi milling cutter ganda untuk hasil yang maksimal.
            </p>
            <p class="text-justify mt-4">
              Mesin ini dapat memproses binding dengan panjang maksimal 420 mm dan ketebalan hingga 60 mm. Dilengkapi dengan fitur tri-folding dan sistem milling ganda (Small Milling Cutter + Sun Milling Cutter) untuk hasil pengerjaan yang presisi dan rapi.
            </p>
            <h2 class="font-semibold mt-4">Keunggulan:</h2>
            <ul class="list-disc pl-4">
              <li>Kapasitas produksi tinggi hingga 350 buku/jam</li>
              <li>Sistem double roller dan side glue roller untuk aplikasi lem yang merata</li>
              <li>Teknologi milling ganda untuk hasil potong yang presisi</li>
              <li>Fitur tri-folding untuk fleksibilitas pengerjaan</li>
              <li>Waktu leleh lem yang efisien (≤45 menit)</li>
              <li>Konstruksi kokoh dengan berat 262 kg</li>
              <li>Performa tinggi dengan daya 2200 Watt</li>
              <li>Hasil binding profesional dan tahan lama</li>
            </ul>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="text-xl font-semibold text-gray-800">FORTIS 720 Mesin Gluing 720</h2>
            <a href="https://vicentra.co.id/product/mesin/finishing/gluing/fortis-mg720" target="_blank">
              <figure class="mt-4">
                <img src="https://vicentra.co.id/storage/product-medias/043-web-mesin-gluing-720.webp"
                  alt="printer-indoor-neu-jet-mpehp1601" class="mx-auto rounded-lg w-full lg:w-[50%]">
                <figcaption class="text-center">mesin-gluing-fortis-720</figcaption>
              </figure>
            </a>
            <p class="text-justify mt-4">
              Untuk kebutuhan pelipatan dan penyegelan, <a href="https://vicentra.co.id/product/mesin/finishing/gluing/fortis-mg720" class="underline">FORTIS 720</a> adalah solusi andal yang memastikan hasil akhir sempurna. Ideal untuk usaha percetakan kemasan, amplop, atau produk sejenis. Klik gambar untuk mengetahui lebih lanjut.
            </p>
            <p class="text-justify mt-4">
              <a href="https://vicentra.co.id/product/mesin/finishing/gluing/fortis-mg720" class="underline">FORTIS 720</a> adalah mesin laminating profesional dengan lebar media hingga 720 mm, cocok untuk kebutuhan finishing cetak seperti laminasi poster, banner, atau dokumen penting. Mesin ini memiliki kecepatan variabel hingga 30 meter per menit, memastikan efisiensi dalam proses produksi tanpa mengorbankan kualitas hasil.
            </p>
            <p class="text-justify mt-4">
              Mesin ini menggunakan daya hemat energi sebesar 120 Watt dan beroperasi pada tegangan 220 V dengan frekuensi 50-60 Hz. Dengan dimensi ringkas 940 × 410 × 960 mm dan bobot hanya 55 kg, mesin ini mudah ditempatkan di berbagai ruang kerja tanpa memakan banyak tempat.
            </p>
            <h2 class="font-semibold mt-4">Keunggulan:</h2>
            <ul class="list-disc pl-4">
              <li>Lebar Media Besar Mendukung laminasi media hingga lebar 720 mm untuk berbagai kebutuhan cetak.</li>
              <li>Kecepatan Variabel Kecepatan hingga 30 meter per menit yang dapat disesuaikan sesuai kebutuhan.</li>
              <li>Hemat Energi Konsumsi daya rendah hanya 120 Watt, cocok untuk penggunaan jangka panjang.</li>
              <li>Desain Ringkas dan Portabel Dimensi yang kompak dengan bobot ringan memudahkan penempatan dan pemindahan.</li>
              <li>Kinerja Stabil Didukung sistem yang dirancang untuk hasil laminasi berkualitas tinggi dan presisi.</li>
            </ul>
          </div>
          <div class="my-[1.875rem]">
            <h2 class="font-semibold">Tren Terkini dalam Industri Percetakan</h2>
            <p class="text-justify mt-4">
              Dalam setahun terakhir, permintaan terhadap produk percetakan seperti kemasan custom, label, stiker, dan merchandise kustom mengalami peningkatan signifikan. Hal ini seiring dengan pertumbuhan industri kreatif dan e-commerce di Indonesia. Dengan memiliki mesin-mesin di atas, Anda dapat memenuhi kebutuhan pasar yang terus berkembang dan meningkatkan daya saing bisnis Anda.
            </p>
            <h2 class="font-semibold mt-4">Kesimpulan</h2>
            <p class="text-justify mt-4">
              Memilih mesin percetakan yang tepat dapat meningkatkan efisiensi dan kualitas hasil cetak Anda. Jika Anda tertarik untuk mengetahui lebih detail mengenai mesin-mesin di atas, silakan kunjungi website utama kami di <a href="https://vicentra.co.id" class="underline">vicentra.co.id</a> atau channel youtube kami di <a href="https://www.youtube.com/@galeryvicentra" class="underline">@galeryvicentra</a> untuk melihat promo dan update terbaru. Jangan ragu untuk menghubungi kami jika Anda memerlukan konsultasi lebih lanjut. Selamat memilih mesin terbaik untuk bisnis Anda!
            </p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4 mt-[2rem] lg:mt-0">
          <h1 class="text-2xl font-semibold text-gray-800">Artikel Lainnya</h1>
          <div class="flex flex-col items-start gap-[0.625rem] mt-[1.875rem]">
            <?php foreach ($posts as $post): ?>
              <a href="<?= $post['link_post']; ?>">
                <h1 class="text-base"><?= $post['title']; ?></h1>
                <p class="text-xs text-gray-500"><?= $post['created_at']; ?></p>
                <hr class="mt-[0.625rem]">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- PRODUCT SECTION -->

    <!-- CTA SECTION -->
    <section class="my-[2.5rem]">
      <h1 class="capitalize text-3xl font-semibold text-center">Hubungi Kami</h1>
      <div class="relative flex justify-center mt-5">
        <div class="w-[80vw] h-[2px] bg-[#e1e1e1]"></div>
        <div class="w-[10vw] h-[2px] bg-[#1B0000] absolute"></div>
      </div>
      <div class="lg:w-[40vw] mx-5 lg:mx-auto flex justify-center mt-10">
        <?php foreach ($salesPeople as $sales): ?>
          <a href="https://api.whatsapp.com/send?phone=<?= $sales['phone']; ?>&text=Hallo%20Vicentra,%20Saya%20Ingin%20Memesan%20Mesin%20UV."
            target="_blank"
            class="<?= ($sales['id'] === 1) ? 'bg-[#006db8]' : 'bg-green-600'; ?> sales_<?= $sales['slug']; ?>_cta_link w-full h-[5rem] flex items-center gap-[1.5rem] rounded-full relative py-2 pl-[7rem]">

            <div class="absolute left-0">
              <div class="w-[5.5rem] h-[5.5rem] rounded-full border-[0.188rem] border-white relative">
                <img src="<?= $sales['photo']; ?>" alt="<?= $sales['name']; ?>" class="rounded-full" />
                <div class="w-[1.5rem] h-[1.5rem] flex justify-center items-center bg-white rounded-full absolute right-[-0.75rem] top-[50%] transform translate-y-[-50%]">
                  <i class="fa-brands fa-whatsapp text-green-500"></i>
                </div>
              </div>
            </div>

            <div class="mr-4">
              <div class="flex gap-2">
                <h1 class="text-sm font-medium text-white/50 capitalize">
                  <?= $sales['name']; ?>
                </h1>
                <span class="flex justify-center items-center text-xs font-semibold text-white bg-white/20 px-2 rounded-md capitalize">
                  online
                </span>
              </div>
              <p class="w-full text-sm font-medium text-white mt-1">
                <?= $sales['additional_sentence']; ?>
              </p>
            </div>

          </a>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- CTA SECTION -->

    <!-- FOOTER -->
    <footer class="bg-black py-5 flex justify-center items-center">
      <p class="text-sm text-white">Vicentra © 2025 Created By Vicentra Dev.</p>
    </footer>
    <!-- FOOTER -->
  </div>

  <script defer type="module" src="./assets/js/app.js"></script>
</body>

</html>