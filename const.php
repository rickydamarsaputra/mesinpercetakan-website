<?php
$products = [];
$posts = [];

$salesPeople = [
  [
    "id" => 1,
    "name" => "Layanan 24 Jam",
    "slug" => "layanan_24_jam",
    "phone" => "6281232548368",
    "photo" => "https://vicentra.co.id/storage/sales-people/vicentra-24-jam.webp",
    "additional_sentence" => "Ada pertanyaan atau ingin memesan produk ini?"
  ],
  // [
  //     "id" => 2,
  //     "name" => "Yaya",
  //     "slug" => "yaya",
  //     "phone" => "6285175005535",
  //     "photo" => "https://vicentra.co.id/storage/sales-people/sales-yaya.webp",
  //     "additional_sentence" => "Support 24 jam"
  // ],
  // [
  //     "id" => 3,
  //     "name" => "Alda",
  //     "slug" => "alda",
  //     "phone" => "6285183171200",
  //     "photo" => "https://vicentra.co.id/storage/sales-people/sales-alda.webp",
  //     "additional_sentence" => "Ada pertanyaan atau ingin memesan produk ini?"
  // ],
  // [
  //     "id" => 4,
  //     "name" => "Ella",
  //     "slug" => "ella",
  //     "phone" => "6285733399974",
  //     "photo" => "https://vicentra.co.id/storage/sales-people/sales-ella.webp",
  //     "additional_sentence" => "Ada pertanyaan atau ingin memesan produk ini?"
  // ],
];

$url = "https://vicentra.co.id/api/posts";
$response = file_get_contents($url);

$posts = json_decode($response, true)['data'];
