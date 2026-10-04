<?php
function getUsers() {
  $users = [
    ["id" => 1, "name" => "Admin Utama",    "email" => "admin@ski.sch.id",               "role" => "admin"],
    ["id" => 2, "name" => "Budi Santoso",   "email" => "budi.santoso@siswa.ski.sch.id",  "role" => "member"],
    ["id" => 3, "name" => "Siti Aminah",    "email" => "siti.aminah@siswa.ski.sch.id",   "role" => "member"],
    ["id" => 4, "name" => "Richard Marcell","email" => "richard.m@ski.sch.id",           "role" => "admin"],
  ];
  return $users;
} 

function getUser() {
  $user = [
    "id" => 1,
    "name" => "Admin Utama",
    "email" => "admin@ski.sch.id",
    "role" => "admin"
  ];
  return $user;
}

function getProfile() {
 $profile = [
  "user_id" => 2,
  "phone" => "0858-2862-3952",
  "address" => "JL. Hassanudin No. 115D, Pontianak, Kalimantan Barat",
  "bio" => "Murid kelas XI TKJ yang menunda tugas.", 
  ];
  return $profile;
}