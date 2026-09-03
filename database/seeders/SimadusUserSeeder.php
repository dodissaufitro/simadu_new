<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SimadusUserSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        $data_users = array (
  0 => 
  array (
    'id' => 1,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'Admin',
    'image' => NULL,
    'email' => 'admin@test.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => NULL,
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-25 11:38:39',
    'updated_at' => '2025-05-25 11:38:39',
  ),
  1 => 
  array (
    'id' => 2,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'adan',
    'image' => '01JW6HKNP0C3SYAP394HD8D8P7.png',
    'email' => 'adan@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082285578666',
    'remember_token' => NULL,
    'deleted_at' => '2025-05-27 21:15:18',
    'created_at' => '2025-05-26 21:58:06',
    'updated_at' => '2025-05-27 21:15:18',
  ),
  2 => 
  array (
    'id' => 3,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'AGUS SUTRISNO',
    'image' => '01JW90XNBTGFVMPMQ5M0VQE45B.png',
    'email' => 'agussutrisno1002@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082242303027',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:04:11',
    'updated_at' => '2025-05-27 21:04:11',
  ),
  3 => 
  array (
    'id' => 4,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'AHMAD HUZAINI',
    'image' => '01JW91MA4QT16BBGM2NARR4VNK.png',
    'email' => 'ahuzaini99@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081806045278',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:16:33',
    'updated_at' => '2025-06-16 12:21:50',
  ),
  4 => 
  array (
    'id' => 5,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ALEX YULIARTO',
    'image' => '01JW921P9A67WQZ3R042WPR0A6.jpg',
    'email' => 'alexyuliarto79@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081384184645',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:23:52',
    'updated_at' => '2025-05-27 21:23:52',
  ),
  5 => 
  array (
    'id' => 6,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ANDRI ALAMSYAH',
    'image' => '01JW922Q1Y79CCR3NT3MR4HT5X.png',
    'email' => 'andriyrezacobain@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '083873273040',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:24:25',
    'updated_at' => '2025-06-16 12:22:33',
  ),
  6 => 
  array (
    'id' => 7,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ARSIMAN BIN SAMAN',
    'image' => '01JWAK49A2YTWT0JA662AVK6XY.png',
    'email' => 'arsiman1708@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081383999915',
    'remember_token' => 'XBqvel5ZUyg3MRVrmZTkDYOkA2pUMqcNVWJlEuzbuSqpcLPTAy5JqDLp5Au6',
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:41:37',
    'updated_at' => '2025-06-16 12:26:44',
  ),
  7 => 
  array (
    'id' => 8,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ATMODJO',
    'image' => '01JWAK7KKGYYQHP4D3HZ5C3DHW.png',
    'email' => 'atmodjo418@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0895328165750',
    'remember_token' => 'VE2eHSRJNXe1q8QJf1Ajw98HrTWqJUkv0UKPLE2kePpuMW44GeDdz6upYK48',
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:43:26',
    'updated_at' => '2025-06-16 12:28:30',
  ),
  8 => 
  array (
    'id' => 9,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'BAGUS INDRA RIYANDI',
    'image' => '01JWAKD6K2A45E4DAFSKZGEA94.png',
    'email' => 'papsriyandi04@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085697136065',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:46:29',
    'updated_at' => '2025-05-28 11:54:56',
  ),
  9 => 
  array (
    'id' => 10,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'CAHYONO',
    'image' => '01JWAKJ0QZMDTGHH325Y9X5JQM.png',
    'email' => 'yonogeong506@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081319406242',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  10 => 
  array (
    'id' => 11,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'CHAERUDIN',
    'image' => NULL,
    'email' => 'heruchaerudin780@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081808624417',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  11 => 
  array (
    'id' => 12,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'CHAERUL SALEH',
    'image' => NULL,
    'email' => 'aplikasil15@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085882475157',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  12 => 
  array (
    'id' => 13,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DAMPRIYO',
    'image' => NULL,
    'email' => 'dampriyo74@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085212421980',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  13 => 
  array (
    'id' => 14,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DANIEL WAHYUDIN',
    'image' => NULL,
    'email' => 'danielwahyudin01@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085883453419',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  14 => 
  array (
    'id' => 15,
    'rusun_id' => 18,
    'tower_id' => 25,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DENY MARDIANSAH',
    'image' => NULL,
    'email' => 'mardiansyahdeny66@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08871675545',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  15 => 
  array (
    'id' => 16,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DEVI WAHYUDIN',
    'image' => '01JXVKXWFPPV88FJBNSXJTA719.png',
    'email' => 'deviwahyudin07@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '083179679019',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-06-16 12:38:23',
  ),
  16 => 
  array (
    'id' => 17,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DICKY SURYADININGRAT',
    'image' => '01JXVKYSX39NGAV3CKAQ827P9X.png',
    'email' => 'dickysuryadiningrat95@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087777007975',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-06-16 12:38:53',
  ),
  17 => 
  array (
    'id' => 18,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DIKA WAHYUDI',
    'image' => '01JXVM1FT2CGEM6KVQXKTHGP5Z.png',
    'email' => 'dikawahyudi20@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085891117458',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-06-16 12:40:21',
  ),
  18 => 
  array (
    'id' => 19,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'DONI RAMDHANI',
    'image' => NULL,
    'email' => 'doniramdhani1985@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089631300081',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  19 => 
  array (
    'id' => 20,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'EKO NURROHIM',
    'image' => NULL,
    'email' => 'ekonurrohim02@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081398848782',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  20 => 
  array (
    'id' => 21,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'FARLY JISTIA RAKASIWI',
    'image' => NULL,
    'email' => 'farlyraka04@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085591819741',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  21 => 
  array (
    'id' => 22,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'GALIH SAPTO AJI',
    'image' => NULL,
    'email' => 'galihsapto24@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089652400021',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  22 => 
  array (
    'id' => 23,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'HENDRA SAPUTRA',
    'image' => NULL,
    'email' => 'firay.1212@yahoo.co.id',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087883006086',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  23 => 
  array (
    'id' => 24,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'HENDRA SETIAWAN',
    'image' => NULL,
    'email' => 'hs4208201@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081223401684',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  24 => 
  array (
    'id' => 25,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'HERU ARYO W',
    'image' => NULL,
    'email' => 'heruaryowisnu11@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082258497376',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  25 => 
  array (
    'id' => 26,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'IMAM SANTOSO',
    'image' => NULL,
    'email' => 'is6289029@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089602349923',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  26 => 
  array (
    'id' => 27,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'IMAM SUDRAJAT',
    'image' => NULL,
    'email' => 'imam78sudrajat@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081280874165',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  27 => 
  array (
    'id' => 28,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'INDRA NUR ROHMAN',
    'image' => NULL,
    'email' => 'indraaanr04@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '088707700947',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  28 => 
  array (
    'id' => 29,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'JEFRIANSYAH',
    'image' => NULL,
    'email' => 'jefriansyah462@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085212504129',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  29 => 
  array (
    'id' => 30,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'JUMADI BIN SODIKIN',
    'image' => NULL,
    'email' => 'jumadiy9112@mail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085885558909',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  30 => 
  array (
    'id' => 31,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'KHOLID YUNIARTO',
    'image' => NULL,
    'email' => 'kholidyuniarto13@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085289911127',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  31 => 
  array (
    'id' => 32,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MAULANA YUSUF',
    'image' => NULL,
    'email' => 'mauyusuf1410@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08997306984',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  32 => 
  array (
    'id' => 33,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MOHAMAD ROYADI',
    'image' => NULL,
    'email' => 'royadimohamad@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081517826756',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  33 => 
  array (
    'id' => 34,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MUHAMMAD FARHAN',
    'image' => NULL,
    'email' => 'masfarhan050398@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085888293693',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  34 => 
  array (
    'id' => 35,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MUHAMMAD DARUSSALAM',
    'image' => NULL,
    'email' => 'sdarus027@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081284127383',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  35 => 
  array (
    'id' => 36,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MUHAMAD IDRIS',
    'image' => NULL,
    'email' => 'mi7139529@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081387003496',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  36 => 
  array (
    'id' => 37,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MUHAMMAD NAUFAL',
    'image' => NULL,
    'email' => 'mhmdnaufal561@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085883146856',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  37 => 
  array (
    'id' => 38,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'MUHAMMAD ULUMUDIN',
    'image' => NULL,
    'email' => 'ulum.anfield@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089610915441',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  38 => 
  array (
    'id' => 39,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'NURHADI MUSSALAM',
    'image' => NULL,
    'email' => 'nurhadimussa@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081296563310',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  39 => 
  array (
    'id' => 40,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'OKTANI FAHRIANSYAH',
    'image' => NULL,
    'email' => 'isselgabo@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081298155695',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  40 => 
  array (
    'id' => 41,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'PURWADI',
    'image' => NULL,
    'email' => 'adelyaniza@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085288813672',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  41 => 
  array (
    'id' => 42,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'RACHMAT NUR DARMAWAN',
    'image' => NULL,
    'email' => 'rahmatnurdarmawan94@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087789909399',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  42 => 
  array (
    'id' => 43,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'RASYID BAGUS ALAMSYAH',
    'image' => NULL,
    'email' => 'rbsyah20@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081546095459',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  43 => 
  array (
    'id' => 44,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'RIZKY KURNIA WIJAYA',
    'image' => NULL,
    'email' => 'rizkykurniawijaya023@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085640234855',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  44 => 
  array (
    'id' => 45,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'SANTOSO PRIBADI',
    'image' => NULL,
    'email' => '1csansr1@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081318147510',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  45 => 
  array (
    'id' => 46,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'SUSWANTO',
    'image' => NULL,
    'email' => 'sisflamboyan@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087877927888',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  46 => 
  array (
    'id' => 47,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'SUWARDI',
    'image' => NULL,
    'email' => 'ardireaborn6201@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085773156966',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  47 => 
  array (
    'id' => 48,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'SYAMSUL RIZAL',
    'image' => NULL,
    'email' => 'rsyamsul032@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085781652852',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  48 => 
  array (
    'id' => 49,
    'rusun_id' => 19,
    'tower_id' => 31,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'TEJO KURNIAWAN',
    'image' => NULL,
    'email' => 'tejokurniawan87@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089654914694',
    'remember_token' => 'YK7jGmiVAksQ3YecLf729VngJ6XJ4vkzh8NS1zdwiVK9a6BdficPh5BKGx9q',
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  49 => 
  array (
    'id' => 50,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'TRI PURNOMO',
    'image' => '01JXBVY3DH5ZD3QXPN0SZQWCZS.jpg',
    'email' => 'punomopurnomo81@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081219119987',
    'remember_token' => 'Rjx3qVGqMNBzSdJKAHO6w72UbqT9XZTOnDRnOuQTqy9okiLiPvEy4hOgsYWM',
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-06-10 09:50:28',
  ),
  50 => 
  array (
    'id' => 51,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'WIDI PURBA ANGGARA',
    'image' => NULL,
    'email' => 'faribiriba@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082134275420',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  51 => 
  array (
    'id' => 52,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ZAINUDIN AKBAR',
    'image' => NULL,
    'email' => 'zainudinakbar30@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081289801420',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  52 => 
  array (
    'id' => 53,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'Afri Wandi',
    'image' => NULL,
    'email' => 'afriwandi@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082285578390',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  53 => 
  array (
    'id' => 54,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'Penghuni 1',
    'image' => NULL,
    'email' => 'penghuni1@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082285994855',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  54 => 
  array (
    'id' => 55,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'penghuni2',
    'image' => NULL,
    'email' => 'penghuni2@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08223823',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  55 => 
  array (
    'id' => 56,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'samsul bahri',
    'image' => NULL,
    'email' => 'syamsulbahri@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08222732227321',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  56 => 
  array (
    'id' => 57,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ISMAIL ',
    'image' => NULL,
    'email' => 'ismailcrew.ic@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087798569243',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  57 => 
  array (
    'id' => 58,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'tantowidavinci@gmail.com',
    'image' => NULL,
    'email' => 'tantowidavinci@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085923340443',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  58 => 
  array (
    'id' => 59,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'Ajeng',
    'image' => NULL,
    'email' => 'ajengsitialawiyah@14gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085778656462',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-28 11:49:07',
    'updated_at' => '2025-05-28 11:49:07',
  ),
  59 => 
  array (
    'id' => 60,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 90,
    'unit_id' => 1387,
    'name' => 'Abraham levi',
    'image' => '01JX4DXYEZZW1PTT4E9THRE957.jpg',
    'email' => 'bramna70@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081510049410',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-07 12:31:02',
    'updated_at' => '2025-06-07 12:31:02',
  ),
  60 => 
  array (
    'id' => 61,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => 136,
    'unit_id' => 2100,
    'name' => 'Heru anggara',
    'image' => '01JX8R8G3ZGJQDGYZ3H6FAZ0HH.jpg',
    'email' => 'heruanggara1410@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081296766936',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-09 04:48:31',
    'updated_at' => '2025-06-09 04:48:31',
  ),
  61 => 
  array (
    'id' => 62,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 73,
    'unit_id' => 1118,
    'name' => 'Djunaidi ',
    'image' => '01JXAMDHEE2AFVT1EH1D50A4RV.jpg',
    'email' => 'junetahmad1979@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082123672898',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-09 22:19:51',
    'updated_at' => '2025-06-09 22:19:51',
  ),
  62 => 
  array (
    'id' => 63,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 83,
    'unit_id' => 1253,
    'name' => 'Heriman',
    'image' => '01JXBR92DFTR4W01K0F0CF6VFH.png',
    'email' => 'herimanhery99@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081514595166',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-10 08:46:33',
    'updated_at' => '2025-06-10 08:46:33',
  ),
  63 => 
  array (
    'id' => 64,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 85,
    'unit_id' => 1302,
    'name' => 'Kholid Yuniarto',
    'image' => '01JXCK2TAWFPN80FS9F37P6BXA.jpg',
    'email' => 'kholidyuniarto8@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085289911127',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-10 16:35:00',
    'updated_at' => '2025-06-10 16:35:00',
  ),
  64 => 
  array (
    'id' => 65,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 80,
    'unit_id' => 1205,
    'name' => 'Sidik',
    'image' => '01JXFHHKZKY4DWN34P6K8Q3SFD.jpg',
    'email' => 'limsidik88@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08119199985',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-11 20:05:51',
    'updated_at' => '2025-06-11 20:05:51',
  ),
  65 => 
  array (
    'id' => 66,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 84,
    'unit_id' => 1275,
    'name' => 'Indra Loaviyanto Junaedi',
    'image' => '01JXGYDE5ARYV8ZY3HQ2P91T3W.jpg',
    'email' => 'indralovianto@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081280977085',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-12 09:10:00',
    'updated_at' => '2025-06-12 09:10:00',
  ),
  66 => 
  array (
    'id' => 67,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 64,
    'unit_id' => 956,
    'name' => 'Dias Karuri',
    'image' => '01JXXSNQYG0HM6TXMAGZSS99F0.png',
    'email' => 'yendra.aceh@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081292801910',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-17 08:57:17',
    'updated_at' => '2025-06-17 08:57:17',
  ),
  67 => 
  array (
    'id' => 68,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 100,
    'unit_id' => 1544,
    'name' => 'penghuni',
    'image' => '01JXY6EYVMF3Z34XP75G6MT91Y.png',
    'email' => 'penghuni@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08234567889',
    'remember_token' => 'JKkOUMvnQXWYeND7GDp7tzyzfkCTWkfpPO1aRviLl4J1h209MaSxMarlRbjX',
    'deleted_at' => NULL,
    'created_at' => '2025-06-17 12:40:46',
    'updated_at' => '2025-06-22 18:47:30',
  ),
  68 => 
  array (
    'id' => 69,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'teknisi',
    'image' => '01JXY6HRAEQE2Y1FRRJ4J50SGZ.png',
    'email' => 'teknisi@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08232333233',
    'remember_token' => '6sMwHinhJpZMhEmsmlULl5uc9VRQQ1nHW1HelyK54hHA5MRGJHC3G8FR6Wz8',
    'deleted_at' => NULL,
    'created_at' => '2025-06-17 12:42:17',
    'updated_at' => '2025-06-17 12:42:17',
  ),
  69 => 
  array (
    'id' => 70,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'Koordinator',
    'image' => '01JXY6M8DDPTG73XPA0QES4Y5W.png',
    'email' => 'koordinator@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08383838383',
    'remember_token' => '4kVDcwjDxD4VGVPCBdjFdh1XHJVnfouQkZeFMHZiIIba9QUKhmGgBppjFgW5',
    'deleted_at' => NULL,
    'created_at' => '2025-06-17 12:43:39',
    'updated_at' => '2025-06-23 11:31:36',
  ),
  70 => 
  array (
    'id' => 71,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 67,
    'unit_id' => 1011,
    'name' => 'Jeslin Faradina',
    'image' => '01JY0K1AVWMDV3JX2C3XCB7QVX.JPG',
    'email' => 'jeslinfaradina.jf@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081284196989',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-18 10:59:00',
    'updated_at' => '2025-06-18 10:59:00',
  ),
  71 => 
  array (
    'id' => 72,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 80,
    'unit_id' => 1212,
    'name' => 'Nuril Anwar',
    'image' => '01JY6MRCHJ4NNJKDFVHDXVK2ZV.jpg',
    'email' => 'na9012036@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087888370571',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-20 19:24:30',
    'updated_at' => '2025-06-20 19:24:30',
  ),
  72 => 
  array (
    'id' => 73,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 65,
    'unit_id' => 977,
    'name' => 'Yosua',
    'image' => '01JY9HWNT70005Q80J9KEW0HEC.jpg',
    'email' => 'yosuapardede8@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082124977672',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-21 22:32:08',
    'updated_at' => '2025-06-21 22:32:08',
  ),
  73 => 
  array (
    'id' => 74,
    'rusun_id' => 16,
    'tower_id' => 40,
    'lantai_id' => 109,
    'unit_id' => 1688,
    'name' => 'Penghuni Rusun 7',
    'image' => '01JYBSKWF0TW5JZ2Y5ESTFGD65.png',
    'email' => 'penghuni7@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0822238322',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-22 19:25:38',
    'updated_at' => '2025-06-22 19:25:38',
  ),
  74 => 
  array (
    'id' => 75,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 88,
    'unit_id' => 1359,
    'name' => 'Denis Saputra',
    'image' => '01JYN2MDM0KHJPVWX027Z8EKWM.jpg',
    'email' => 'ngdenissaputra89@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082288889228',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-26 09:56:22',
    'updated_at' => '2025-06-26 09:56:22',
  ),
  75 => 
  array (
    'id' => 76,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 86,
    'unit_id' => 1323,
    'name' => 'Calvin Setiawan ',
    'image' => '01JYN9ZMHGJ1D7P3QX9Q6VDRER.jpg',
    'email' => 'recabileyecy@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085156318625',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-26 12:04:50',
    'updated_at' => '2025-06-26 12:04:50',
  ),
  76 => 
  array (
    'id' => 77,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 74,
    'unit_id' => 1142,
    'name' => 'PESA Pratama ',
    'image' => '01JYPAG2KF1W7YP0TR2768M4VM.jpg',
    'email' => 'pesapratamapesa69218@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '088292236274',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-26 21:33:03',
    'updated_at' => '2025-06-26 21:33:03',
  ),
  77 => 
  array (
    'id' => 78,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => 141,
    'unit_id' => 2161,
    'name' => 'Muhammad Ramdhani',
    'image' => '01JZDTZHS8C5ZHZH1Q0DN25CF6.jpg',
    'email' => 'm.ramdhani132@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082180628700',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-07-06 00:43:39',
    'updated_at' => '2025-07-06 00:43:39',
  ),
  78 => 
  array (
    'id' => 79,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 93,
    'unit_id' => 1442,
    'name' => 'Lip khian Sofyanto',
    'image' => '01K1GARV2S00RZT5G6TN0DTHBB.jpg',
    'email' => 'harunalip888@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089615185288',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-07-31 20:29:29',
    'updated_at' => '2025-07-31 20:29:29',
  ),
  79 => 
  array (
    'id' => 80,
    'rusun_id' => 16,
    'tower_id' => 23,
    'lantai_id' => 50,
    'unit_id' => 712,
    'name' => 'Ahmad Suberi',
    'image' => '01K1NNE9WSKKGEQKA9M6NWZS0T.jpg',
    'email' => 'blueberryproshop89@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '087819910928',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-08-02 22:12:10',
    'updated_at' => '2025-08-02 22:12:10',
  ),
  80 => 
  array (
    'id' => 81,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 90,
    'unit_id' => 1384,
    'name' => 'Muhamad Ibnu ramdani ',
    'image' => '01K1SNTFCSDQD51Z030A7EDRQB.jpg',
    'email' => 'ibnuramdani04@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0895367017397',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-08-04 11:35:47',
    'updated_at' => '2025-08-04 11:35:47',
  ),
  81 => 
  array (
    'id' => 82,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 71,
    'unit_id' => 1093,
    'name' => 'Eko Budi Setiawan',
    'image' => '01K292QPCRJ0RTVXPW67ZFR88W.jpeg',
    'email' => 'ekobudisetiawan1532@gmail.con',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085775304865',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-08-10 11:10:04',
    'updated_at' => '2025-08-10 11:10:04',
  ),
  82 => 
  array (
    'id' => 83,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 90,
    'unit_id' => 1384,
    'name' => 'Muhamad Ibnu ramdani',
    'image' => '01K2HQ60KNJ0Z87FZA3EADPX3B.jpg',
    'email' => 'ramdaniibnu04@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0895367017397',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-08-13 19:41:20',
    'updated_at' => '2025-08-13 19:46:40',
  ),
  83 => 
  array (
    'id' => 84,
    'rusun_id' => 16,
    'tower_id' => 18,
    'lantai_id' => 20,
    'unit_id' => 174,
    'name' => 'adut',
    'image' => '01K3960KXF6XNJ3S3EGYGYG8SM.jpg',
    'email' => 'pgspin55@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081573096672',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-08-22 22:23:04',
    'updated_at' => '2025-08-22 22:23:04',
  ),
  84 => 
  array (
    'id' => 85,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 68,
    'unit_id' => 1042,
    'name' => 'Nofriza',
    'image' => '01K4JKK2TB2GTEG03MJHJ6V19H.jpeg',
    'email' => 'syifaqolbiyah142@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085893736530',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-09-08 00:29:12',
    'updated_at' => '2025-09-08 00:29:12',
  ),
  85 => 
  array (
    'id' => 86,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 91,
    'unit_id' => 1408,
    'name' => 'Vinny Setiadi ',
    'image' => '01K5RVTNCQ8TP6HFPD42Y8DSKE.png',
    'email' => 'ad.rochmat8@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '088809767015',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-09-22 21:04:17',
    'updated_at' => '2025-09-22 21:06:25',
  ),
  86 => 
  array (
    'id' => 87,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 94,
    'unit_id' => 1448,
    'name' => 'Budiyanto',
    'image' => '01K5ZJJZ55A7VNTK4VJQA0SKG4.jpg',
    'email' => 'budiyantoguanguan@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081281962908',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-09-25 11:37:29',
    'updated_at' => '2025-09-25 11:37:29',
  ),
  87 => 
  array (
    'id' => 88,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 93,
    'unit_id' => 1444,
    'name' => 'Fadilah Nurwansyah',
    'image' => '01K633STTWN2KNBSXY576VER9E.jpg',
    'email' => 'fadilah.nurwansyah06@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081383524898',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-09-26 20:36:03',
    'updated_at' => '2025-09-26 20:36:03',
  ),
  88 => 
  array (
    'id' => 89,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 97,
    'unit_id' => 1508,
    'name' => 'Alberto Martin',
    'image' => '01K646ZKCC95S1F2MCV5WK3R56.png',
    'email' => 'marin36.am@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081334002373',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-09-27 06:50:52',
    'updated_at' => '2025-09-27 06:50:52',
  ),
  89 => 
  array (
    'id' => 90,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 94,
    'unit_id' => 1458,
    'name' => 'Hartono ',
    'image' => '01K6F48VWSB6RYSH1600GYZZ83.jpg',
    'email' => 'hartonohrh137@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085210854888',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-10-01 12:35:09',
    'updated_at' => '2025-10-01 12:35:09',
  ),
  90 => 
  array (
    'id' => 91,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 67,
    'unit_id' => 1020,
    'name' => 'Badar',
    'image' => '01K7DVDVZRZW51PPWNVAAVH4AJ.jpg',
    'email' => 'badarnailah@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '083896222654',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-10-13 10:57:03',
    'updated_at' => '2025-10-13 10:57:03',
  ),
  91 => 
  array (
    'id' => 92,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 90,
    'unit_id' => 1384,
    'name' => 'ibnuramdabi',
    'image' => '01K7M7079334JE8P8XY6JT9E04.jpg',
    'email' => 'isafaputri02@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0895367017397',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-10-15 22:14:45',
    'updated_at' => '2026-08-08 15:32:49',
  ),
  92 => 
  array (
    'id' => 93,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 90,
    'unit_id' => 1384,
    'name' => 'Muhamad Ibnu ramdani',
    'image' => '01K7QYV9CCGPZPVF40WQS9912X.jpg',
    'email' => 'ibnuramdani05@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0895367017397',
    'remember_token' => 'tRfz5yzcXXSpjqyoisoPuiesRhl0kDwshEtItFzwMHlZLIK7ylfZSwteHa1q',
    'deleted_at' => NULL,
    'created_at' => '2025-10-17 09:09:13',
    'updated_at' => '2025-10-17 09:09:13',
  ),
  93 => 
  array (
    'id' => 94,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 95,
    'unit_id' => 1471,
    'name' => 'Sukendi',
    'image' => '01K7TC3MFE1FYR92JR2VR08MPY.jpg',
    'email' => 'endisukendi6@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081314238634',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-10-18 07:39:27',
    'updated_at' => '2025-10-18 07:39:27',
  ),
  94 => 
  array (
    'id' => 95,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 64,
    'unit_id' => 970,
    'name' => 'henry leo',
    'image' => '01K80HJVT9C7K2048SBP2EQP4E.jpg',
    'email' => 'henryleo1112@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081297034229',
    'remember_token' => '1AFsFt5voHNgQQcFzWrCh0kBdANtjmoXamcL0NYZxnzEQCGCJUoy3WkRGQ0t',
    'deleted_at' => NULL,
    'created_at' => '2025-10-20 17:10:35',
    'updated_at' => '2025-10-20 17:10:35',
  ),
  95 => 
  array (
    'id' => 96,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 72,
    'unit_id' => 1110,
    'name' => 'Dahlia',
    'image' => '01K9KAC71ASWHFDFC99PFKJCTD.jpg',
    'email' => 'dahliafelis14@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085697591965',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-09 10:25:53',
    'updated_at' => '2025-11-09 10:25:53',
  ),
  96 => 
  array (
    'id' => 97,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 68,
    'unit_id' => 1029,
    'name' => 'Lemuel',
    'image' => '01K9P7T7EC1X62GZ6R42BCVVP5.jpg',
    'email' => 'kyuzawa07@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08561351074',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-10 13:38:50',
    'updated_at' => '2025-11-10 13:38:50',
  ),
  97 => 
  array (
    'id' => 98,
    'rusun_id' => 16,
    'tower_id' => 42,
    'lantai_id' => 98,
    'unit_id' => 1518,
    'name' => 'Wiryawan purbaya ananta',
    'image' => '01K9WNC09MKQYFY3SD7SVJYFY5.png',
    'email' => 'sabaryho@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085694655579',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-13 01:31:11',
    'updated_at' => '2025-11-13 01:31:11',
  ),
  98 => 
  array (
    'id' => 99,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 91,
    'unit_id' => 1397,
    'name' => 'Dedes',
    'image' => '01KAGD9JBYSF3Z6VN9T630XC4Z.jpg',
    'email' => 'dedesmaniss@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081383824751',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-20 17:34:51',
    'updated_at' => '2025-11-20 17:34:51',
  ),
  99 => 
  array (
    'id' => 100,
    'rusun_id' => 16,
    'tower_id' => 39,
    'lantai_id' => 92,
    'unit_id' => 1429,
    'name' => 'Amami',
    'image' => '01KCD9X2TBD9MKW7E15SC8W2ZW.jpg',
    'email' => 'amamadoel10@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '081316525684',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-14 09:09:16',
    'updated_at' => '2025-12-14 09:09:16',
  ),
  100 => 
  array (
    'id' => 101,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => 16,
    'unit_id' => 104,
    'name' => 'Alexander Tommy Gonzaga',
    'image' => '01KDVA7EE2331WR2NRBZ0MXGSC.JPG',
    'email' => 'victom397@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089525820354',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-01-01 06:00:00',
    'updated_at' => '2026-01-01 06:00:00',
  ),
  101 => 
  array (
    'id' => 102,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 74,
    'unit_id' => 1147,
    'name' => 'Husaeri',
    'image' => '01KFYM216V7AE35D74B36JNQX7.jpg',
    'email' => 'heribetet18@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089625413771',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-01-27 09:20:55',
    'updated_at' => '2026-01-27 09:20:55',
  ),
  102 => 
  array (
    'id' => 103,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => 139,
    'unit_id' => 2133,
    'name' => 'yuhuu',
    'image' => '01KFZX9V4B89WH4YKZ3V9YAFZH.jpg',
    'email' => 'sprinces407@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '81329736549',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-01-27 21:21:43',
    'updated_at' => '2026-01-27 21:21:43',
  ),
  103 => 
  array (
    'id' => 104,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 74,
    'unit_id' => 1151,
    'name' => 'Okta Repiani',
    'image' => '01KG4BMK1SY8B2ATGDY8ZTQ3AF.jpg',
    'email' => 'oktareviani83@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '085173006190',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-01-29 14:49:13',
    'updated_at' => '2026-01-29 14:49:13',
  ),
  104 => 
  array (
    'id' => 105,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => 15,
    'unit_id' => 87,
    'name' => 'Vin Tempest',
    'image' => '01KNT3SYC77ER1RMKY0BEMSKSY.jpg',
    'email' => 'viintempest@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '08651651115',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-04-10 04:54:06',
    'updated_at' => '2026-04-10 04:54:06',
  ),
  105 => 
  array (
    'id' => 106,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => 13,
    'unit_id' => 55,
    'name' => 'adada',
    'image' => '01KNT3WQQW2CY3BSNX3D1WREDJ.jpg',
    'email' => 'viintempest1@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '0816516515',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-04-10 04:55:38',
    'updated_at' => '2026-04-10 04:55:38',
  ),
  106 => 
  array (
    'id' => 107,
    'rusun_id' => 16,
    'tower_id' => 16,
    'lantai_id' => 13,
    'unit_id' => 55,
    'name' => 'dodis',
    'image' => '01KZETYJN7K14P18HQD0YY2XHX.jpeg',
    'email' => 'saufitrodd@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082323213',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-08-08 02:24:40',
    'updated_at' => '2026-08-08 02:24:40',
  ),
  107 => 
  array (
    'id' => 210,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'AGUS SUTRISNO',
    'image' => '01JW90XNBTGFVMPMQ5M0VQE45B.png',
    'email' => 'agussutrisno1003@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '082242303027',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:04:11',
    'updated_at' => '2025-05-27 21:04:11',
  ),
  108 => 
  array (
    'id' => 801,
    'rusun_id' => NULL,
    'tower_id' => NULL,
    'lantai_id' => NULL,
    'unit_id' => NULL,
    'name' => 'ABDUL AZIZ',
    'image' => NULL,
    'email' => 'alleaziz610@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$VQv3dsmNAUkgK5dUuzQe/O621H0nYsJvGI/kqhAdNprErtzXXUDjy',
    'phone' => '089509745156',
    'remember_token' => 'ijULsod1mYGkYTqb7PdnjvG7KOZvoD3kAuRccfCT4THr2x7THjaGX0IBrhs1',
    'deleted_at' => NULL,
    'created_at' => '2025-05-27 21:04:11',
    'updated_at' => '2025-05-27 21:04:11',
  ),
  109 => 
  array (
    'id' => 802,
    'rusun_id' => 16,
    'tower_id' => 38,
    'lantai_id' => 76,
    'unit_id' => 892,
    'name' => 'Riyan',
    'image' => '01M09MD8706Y3MGS5MP7JY3NJT.webp',
    'email' => 'riyanandini25@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$9KbVdScDmFT3ZRriA3mTDO2CoIg9rVhbrohz1JhHLOyZyXhkvY0aW',
    'phone' => '089525366763',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-08-18 12:09:51',
    'updated_at' => '2026-08-18 12:09:51',
  ),
  110 => 
  array (
    'id' => 803,
    'rusun_id' => 20,
    'tower_id' => 32,
    'lantai_id' => 139,
    'unit_id' => 2134,
    'name' => 'monitor',
    'image' => '01M1G2XTY4S3X0WT7AG1Q138AE.jpg',
    'email' => 'monitor@gmail.com',
    'email_verified_at' => NULL,
    'password' => '$2y$12$FIWr7BZaS78pi92234MejeAS3oEXlrggQEZV1CmxvDua5qcT55nqu',
    'phone' => '08233',
    'remember_token' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2026-09-02 10:34:43',
    'updated_at' => '2026-09-02 10:34:43',
  ),
);
        foreach (array_chunk($data_users, 50) as $chunk) {
            DB::table('users')->insert($chunk);
        }
        DB::table('roles')->truncate();
        $data_roles = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'super_admin',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'koordinator',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:45:36',
    'updated_at' => '2025-05-25 11:45:36',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'teknisi',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:46:19',
    'updated_at' => '2025-05-25 11:46:19',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:46:35',
    'updated_at' => '2025-05-25 11:46:35',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Monitor',
    'guard_name' => 'web',
    'created_at' => '2026-09-02 10:28:58',
    'updated_at' => '2026-09-02 10:28:58',
  ),
);
        foreach (array_chunk($data_roles, 50) as $chunk) {
            DB::table('roles')->insert($chunk);
        }
        DB::table('permissions')->truncate();
        $data_permissions = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'view_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'view_any_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'create_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'update_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'restore_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'restore_any_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  6 => 
  array (
    'id' => 7,
    'name' => 'replicate_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  7 => 
  array (
    'id' => 8,
    'name' => 'reorder_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  8 => 
  array (
    'id' => 9,
    'name' => 'delete_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  9 => 
  array (
    'id' => 10,
    'name' => 'delete_any_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  10 => 
  array (
    'id' => 11,
    'name' => 'force_delete_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  11 => 
  array (
    'id' => 12,
    'name' => 'force_delete_any_complaint',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  12 => 
  array (
    'id' => 13,
    'name' => 'view_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  13 => 
  array (
    'id' => 14,
    'name' => 'view_any_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  14 => 
  array (
    'id' => 15,
    'name' => 'create_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  15 => 
  array (
    'id' => 16,
    'name' => 'update_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  16 => 
  array (
    'id' => 17,
    'name' => 'restore_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  17 => 
  array (
    'id' => 18,
    'name' => 'restore_any_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  18 => 
  array (
    'id' => 19,
    'name' => 'replicate_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  19 => 
  array (
    'id' => 20,
    'name' => 'reorder_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  20 => 
  array (
    'id' => 21,
    'name' => 'delete_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  21 => 
  array (
    'id' => 22,
    'name' => 'delete_any_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  22 => 
  array (
    'id' => 23,
    'name' => 'force_delete_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  23 => 
  array (
    'id' => 24,
    'name' => 'force_delete_any_lantai',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  24 => 
  array (
    'id' => 25,
    'name' => 'view_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  25 => 
  array (
    'id' => 26,
    'name' => 'view_any_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  26 => 
  array (
    'id' => 27,
    'name' => 'create_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  27 => 
  array (
    'id' => 28,
    'name' => 'update_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  28 => 
  array (
    'id' => 29,
    'name' => 'restore_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  29 => 
  array (
    'id' => 30,
    'name' => 'restore_any_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  30 => 
  array (
    'id' => 31,
    'name' => 'replicate_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  31 => 
  array (
    'id' => 32,
    'name' => 'reorder_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  32 => 
  array (
    'id' => 33,
    'name' => 'delete_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  33 => 
  array (
    'id' => 34,
    'name' => 'delete_any_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  34 => 
  array (
    'id' => 35,
    'name' => 'force_delete_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  35 => 
  array (
    'id' => 36,
    'name' => 'force_delete_any_penilaian',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  36 => 
  array (
    'id' => 37,
    'name' => 'view_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  37 => 
  array (
    'id' => 38,
    'name' => 'view_any_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  38 => 
  array (
    'id' => 39,
    'name' => 'create_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  39 => 
  array (
    'id' => 40,
    'name' => 'update_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  40 => 
  array (
    'id' => 41,
    'name' => 'delete_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  41 => 
  array (
    'id' => 42,
    'name' => 'delete_any_role',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  42 => 
  array (
    'id' => 43,
    'name' => 'view_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  43 => 
  array (
    'id' => 44,
    'name' => 'view_any_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  44 => 
  array (
    'id' => 45,
    'name' => 'create_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  45 => 
  array (
    'id' => 46,
    'name' => 'update_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  46 => 
  array (
    'id' => 47,
    'name' => 'restore_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  47 => 
  array (
    'id' => 48,
    'name' => 'restore_any_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  48 => 
  array (
    'id' => 49,
    'name' => 'replicate_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  49 => 
  array (
    'id' => 50,
    'name' => 'reorder_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  50 => 
  array (
    'id' => 51,
    'name' => 'delete_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  51 => 
  array (
    'id' => 52,
    'name' => 'delete_any_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  52 => 
  array (
    'id' => 53,
    'name' => 'force_delete_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  53 => 
  array (
    'id' => 54,
    'name' => 'force_delete_any_rusun',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  54 => 
  array (
    'id' => 55,
    'name' => 'view_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  55 => 
  array (
    'id' => 56,
    'name' => 'view_any_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  56 => 
  array (
    'id' => 57,
    'name' => 'create_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  57 => 
  array (
    'id' => 58,
    'name' => 'update_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  58 => 
  array (
    'id' => 59,
    'name' => 'restore_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  59 => 
  array (
    'id' => 60,
    'name' => 'restore_any_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  60 => 
  array (
    'id' => 61,
    'name' => 'replicate_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  61 => 
  array (
    'id' => 62,
    'name' => 'reorder_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  62 => 
  array (
    'id' => 63,
    'name' => 'delete_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  63 => 
  array (
    'id' => 64,
    'name' => 'delete_any_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  64 => 
  array (
    'id' => 65,
    'name' => 'force_delete_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  65 => 
  array (
    'id' => 66,
    'name' => 'force_delete_any_tower',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  66 => 
  array (
    'id' => 67,
    'name' => 'view_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  67 => 
  array (
    'id' => 68,
    'name' => 'view_any_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  68 => 
  array (
    'id' => 69,
    'name' => 'create_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  69 => 
  array (
    'id' => 70,
    'name' => 'update_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  70 => 
  array (
    'id' => 71,
    'name' => 'restore_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  71 => 
  array (
    'id' => 72,
    'name' => 'restore_any_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  72 => 
  array (
    'id' => 73,
    'name' => 'replicate_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  73 => 
  array (
    'id' => 74,
    'name' => 'reorder_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  74 => 
  array (
    'id' => 75,
    'name' => 'delete_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  75 => 
  array (
    'id' => 76,
    'name' => 'delete_any_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  76 => 
  array (
    'id' => 77,
    'name' => 'force_delete_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  77 => 
  array (
    'id' => 78,
    'name' => 'force_delete_any_unit',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  78 => 
  array (
    'id' => 79,
    'name' => 'view_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  79 => 
  array (
    'id' => 80,
    'name' => 'view_any_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  80 => 
  array (
    'id' => 81,
    'name' => 'create_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  81 => 
  array (
    'id' => 82,
    'name' => 'update_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  82 => 
  array (
    'id' => 83,
    'name' => 'restore_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  83 => 
  array (
    'id' => 84,
    'name' => 'restore_any_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  84 => 
  array (
    'id' => 85,
    'name' => 'replicate_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  85 => 
  array (
    'id' => 86,
    'name' => 'reorder_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  86 => 
  array (
    'id' => 87,
    'name' => 'delete_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  87 => 
  array (
    'id' => 88,
    'name' => 'delete_any_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  88 => 
  array (
    'id' => 89,
    'name' => 'force_delete_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  89 => 
  array (
    'id' => 90,
    'name' => 'force_delete_any_user',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:28',
    'updated_at' => '2025-05-25 11:38:28',
  ),
  90 => 
  array (
    'id' => 91,
    'name' => 'page_EditPassword',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:29',
    'updated_at' => '2025-05-25 11:38:29',
  ),
  91 => 
  array (
    'id' => 92,
    'name' => 'page_EditProfile',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:29',
    'updated_at' => '2025-05-25 11:38:29',
  ),
  92 => 
  array (
    'id' => 93,
    'name' => 'page_Profile',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:29',
    'updated_at' => '2025-05-25 11:38:29',
  ),
  93 => 
  array (
    'id' => 94,
    'name' => 'widget_CountComplaintReport',
    'guard_name' => 'web',
    'created_at' => '2025-05-25 11:38:29',
    'updated_at' => '2025-05-25 11:38:29',
  ),
  94 => 
  array (
    'id' => 95,
    'name' => 'widget_ComplaintsChart',
    'guard_name' => 'web',
    'created_at' => '2026-09-02 10:28:58',
    'updated_at' => '2026-09-02 10:28:58',
  ),
);
        foreach (array_chunk($data_permissions, 50) as $chunk) {
            DB::table('permissions')->insert($chunk);
        }
        DB::table('model_has_roles')->truncate();
        $data_model_has_roles = array (
  0 => 
  array (
    'role_id' => 1,
    'model_type' => 'App\\Models\\User',
    'model_id' => 1,
  ),
  1 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 2,
  ),
  2 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 3,
  ),
  3 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 4,
  ),
  4 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 5,
  ),
  5 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 6,
  ),
  6 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 7,
  ),
  7 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 8,
  ),
  8 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 9,
  ),
  9 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 10,
  ),
  10 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 11,
  ),
  11 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 12,
  ),
  12 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 13,
  ),
  13 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 14,
  ),
  14 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 15,
  ),
  15 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 16,
  ),
  16 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 17,
  ),
  17 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 18,
  ),
  18 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 19,
  ),
  19 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 20,
  ),
  20 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 21,
  ),
  21 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 22,
  ),
  22 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 23,
  ),
  23 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 24,
  ),
  24 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 25,
  ),
  25 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 26,
  ),
  26 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 27,
  ),
  27 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 28,
  ),
  28 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 29,
  ),
  29 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 30,
  ),
  30 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 31,
  ),
  31 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 32,
  ),
  32 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 33,
  ),
  33 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 34,
  ),
  34 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 35,
  ),
  35 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 36,
  ),
  36 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 37,
  ),
  37 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 38,
  ),
  38 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 39,
  ),
  39 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 40,
  ),
  40 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 41,
  ),
  41 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 42,
  ),
  42 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 43,
  ),
  43 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 44,
  ),
  44 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 45,
  ),
  45 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 46,
  ),
  46 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 47,
  ),
  47 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 48,
  ),
  48 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 49,
  ),
  49 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 50,
  ),
  50 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 51,
  ),
  51 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 52,
  ),
  52 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 53,
  ),
  53 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 54,
  ),
  54 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 55,
  ),
  55 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 56,
  ),
  56 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 57,
  ),
  57 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 58,
  ),
  58 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 59,
  ),
  59 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 60,
  ),
  60 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 61,
  ),
  61 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 62,
  ),
  62 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 63,
  ),
  63 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 64,
  ),
  64 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 65,
  ),
  65 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 66,
  ),
  66 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 67,
  ),
  67 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 68,
  ),
  68 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 69,
  ),
  69 => 
  array (
    'role_id' => 2,
    'model_type' => 'App\\Models\\User',
    'model_id' => 70,
  ),
  70 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 71,
  ),
  71 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 72,
  ),
  72 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 73,
  ),
  73 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 74,
  ),
  74 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 75,
  ),
  75 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 76,
  ),
  76 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 77,
  ),
  77 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 78,
  ),
  78 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 79,
  ),
  79 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 80,
  ),
  80 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 81,
  ),
  81 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 82,
  ),
  82 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 83,
  ),
  83 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 84,
  ),
  84 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 85,
  ),
  85 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 86,
  ),
  86 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 87,
  ),
  87 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 88,
  ),
  88 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 89,
  ),
  89 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 90,
  ),
  90 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 91,
  ),
  91 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 92,
  ),
  92 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 93,
  ),
  93 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 94,
  ),
  94 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 95,
  ),
  95 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 96,
  ),
  96 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 97,
  ),
  97 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 98,
  ),
  98 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 99,
  ),
  99 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 100,
  ),
  100 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 101,
  ),
  101 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 102,
  ),
  102 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 103,
  ),
  103 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 104,
  ),
  104 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 105,
  ),
  105 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 106,
  ),
  106 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 107,
  ),
  107 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 210,
  ),
  108 => 
  array (
    'role_id' => 3,
    'model_type' => 'App\\Models\\User',
    'model_id' => 801,
  ),
  109 => 
  array (
    'role_id' => 4,
    'model_type' => 'App\\Models\\User',
    'model_id' => 802,
  ),
  110 => 
  array (
    'role_id' => 5,
    'model_type' => 'App\\Models\\User',
    'model_id' => 803,
  ),
);
        foreach (array_chunk($data_model_has_roles, 50) as $chunk) {
            DB::table('model_has_roles')->insert($chunk);
        }
        DB::table('role_has_permissions')->truncate();
        $data_role_has_permissions = array (
  0 => 
  array (
    'permission_id' => 1,
    'role_id' => 1,
  ),
  1 => 
  array (
    'permission_id' => 2,
    'role_id' => 1,
  ),
  2 => 
  array (
    'permission_id' => 3,
    'role_id' => 1,
  ),
  3 => 
  array (
    'permission_id' => 4,
    'role_id' => 1,
  ),
  4 => 
  array (
    'permission_id' => 5,
    'role_id' => 1,
  ),
  5 => 
  array (
    'permission_id' => 6,
    'role_id' => 1,
  ),
  6 => 
  array (
    'permission_id' => 7,
    'role_id' => 1,
  ),
  7 => 
  array (
    'permission_id' => 8,
    'role_id' => 1,
  ),
  8 => 
  array (
    'permission_id' => 9,
    'role_id' => 1,
  ),
  9 => 
  array (
    'permission_id' => 10,
    'role_id' => 1,
  ),
  10 => 
  array (
    'permission_id' => 11,
    'role_id' => 1,
  ),
  11 => 
  array (
    'permission_id' => 12,
    'role_id' => 1,
  ),
  12 => 
  array (
    'permission_id' => 13,
    'role_id' => 1,
  ),
  13 => 
  array (
    'permission_id' => 14,
    'role_id' => 1,
  ),
  14 => 
  array (
    'permission_id' => 15,
    'role_id' => 1,
  ),
  15 => 
  array (
    'permission_id' => 16,
    'role_id' => 1,
  ),
  16 => 
  array (
    'permission_id' => 17,
    'role_id' => 1,
  ),
  17 => 
  array (
    'permission_id' => 18,
    'role_id' => 1,
  ),
  18 => 
  array (
    'permission_id' => 19,
    'role_id' => 1,
  ),
  19 => 
  array (
    'permission_id' => 20,
    'role_id' => 1,
  ),
  20 => 
  array (
    'permission_id' => 21,
    'role_id' => 1,
  ),
  21 => 
  array (
    'permission_id' => 22,
    'role_id' => 1,
  ),
  22 => 
  array (
    'permission_id' => 23,
    'role_id' => 1,
  ),
  23 => 
  array (
    'permission_id' => 24,
    'role_id' => 1,
  ),
  24 => 
  array (
    'permission_id' => 25,
    'role_id' => 1,
  ),
  25 => 
  array (
    'permission_id' => 26,
    'role_id' => 1,
  ),
  26 => 
  array (
    'permission_id' => 27,
    'role_id' => 1,
  ),
  27 => 
  array (
    'permission_id' => 28,
    'role_id' => 1,
  ),
  28 => 
  array (
    'permission_id' => 29,
    'role_id' => 1,
  ),
  29 => 
  array (
    'permission_id' => 30,
    'role_id' => 1,
  ),
  30 => 
  array (
    'permission_id' => 31,
    'role_id' => 1,
  ),
  31 => 
  array (
    'permission_id' => 32,
    'role_id' => 1,
  ),
  32 => 
  array (
    'permission_id' => 33,
    'role_id' => 1,
  ),
  33 => 
  array (
    'permission_id' => 34,
    'role_id' => 1,
  ),
  34 => 
  array (
    'permission_id' => 35,
    'role_id' => 1,
  ),
  35 => 
  array (
    'permission_id' => 36,
    'role_id' => 1,
  ),
  36 => 
  array (
    'permission_id' => 37,
    'role_id' => 1,
  ),
  37 => 
  array (
    'permission_id' => 38,
    'role_id' => 1,
  ),
  38 => 
  array (
    'permission_id' => 39,
    'role_id' => 1,
  ),
  39 => 
  array (
    'permission_id' => 40,
    'role_id' => 1,
  ),
  40 => 
  array (
    'permission_id' => 41,
    'role_id' => 1,
  ),
  41 => 
  array (
    'permission_id' => 42,
    'role_id' => 1,
  ),
  42 => 
  array (
    'permission_id' => 43,
    'role_id' => 1,
  ),
  43 => 
  array (
    'permission_id' => 44,
    'role_id' => 1,
  ),
  44 => 
  array (
    'permission_id' => 45,
    'role_id' => 1,
  ),
  45 => 
  array (
    'permission_id' => 46,
    'role_id' => 1,
  ),
  46 => 
  array (
    'permission_id' => 47,
    'role_id' => 1,
  ),
  47 => 
  array (
    'permission_id' => 48,
    'role_id' => 1,
  ),
  48 => 
  array (
    'permission_id' => 49,
    'role_id' => 1,
  ),
  49 => 
  array (
    'permission_id' => 50,
    'role_id' => 1,
  ),
  50 => 
  array (
    'permission_id' => 51,
    'role_id' => 1,
  ),
  51 => 
  array (
    'permission_id' => 52,
    'role_id' => 1,
  ),
  52 => 
  array (
    'permission_id' => 53,
    'role_id' => 1,
  ),
  53 => 
  array (
    'permission_id' => 54,
    'role_id' => 1,
  ),
  54 => 
  array (
    'permission_id' => 55,
    'role_id' => 1,
  ),
  55 => 
  array (
    'permission_id' => 56,
    'role_id' => 1,
  ),
  56 => 
  array (
    'permission_id' => 57,
    'role_id' => 1,
  ),
  57 => 
  array (
    'permission_id' => 58,
    'role_id' => 1,
  ),
  58 => 
  array (
    'permission_id' => 59,
    'role_id' => 1,
  ),
  59 => 
  array (
    'permission_id' => 60,
    'role_id' => 1,
  ),
  60 => 
  array (
    'permission_id' => 61,
    'role_id' => 1,
  ),
  61 => 
  array (
    'permission_id' => 62,
    'role_id' => 1,
  ),
  62 => 
  array (
    'permission_id' => 63,
    'role_id' => 1,
  ),
  63 => 
  array (
    'permission_id' => 64,
    'role_id' => 1,
  ),
  64 => 
  array (
    'permission_id' => 65,
    'role_id' => 1,
  ),
  65 => 
  array (
    'permission_id' => 66,
    'role_id' => 1,
  ),
  66 => 
  array (
    'permission_id' => 67,
    'role_id' => 1,
  ),
  67 => 
  array (
    'permission_id' => 68,
    'role_id' => 1,
  ),
  68 => 
  array (
    'permission_id' => 69,
    'role_id' => 1,
  ),
  69 => 
  array (
    'permission_id' => 70,
    'role_id' => 1,
  ),
  70 => 
  array (
    'permission_id' => 71,
    'role_id' => 1,
  ),
  71 => 
  array (
    'permission_id' => 72,
    'role_id' => 1,
  ),
  72 => 
  array (
    'permission_id' => 73,
    'role_id' => 1,
  ),
  73 => 
  array (
    'permission_id' => 74,
    'role_id' => 1,
  ),
  74 => 
  array (
    'permission_id' => 75,
    'role_id' => 1,
  ),
  75 => 
  array (
    'permission_id' => 76,
    'role_id' => 1,
  ),
  76 => 
  array (
    'permission_id' => 77,
    'role_id' => 1,
  ),
  77 => 
  array (
    'permission_id' => 78,
    'role_id' => 1,
  ),
  78 => 
  array (
    'permission_id' => 79,
    'role_id' => 1,
  ),
  79 => 
  array (
    'permission_id' => 80,
    'role_id' => 1,
  ),
  80 => 
  array (
    'permission_id' => 81,
    'role_id' => 1,
  ),
  81 => 
  array (
    'permission_id' => 82,
    'role_id' => 1,
  ),
  82 => 
  array (
    'permission_id' => 83,
    'role_id' => 1,
  ),
  83 => 
  array (
    'permission_id' => 84,
    'role_id' => 1,
  ),
  84 => 
  array (
    'permission_id' => 85,
    'role_id' => 1,
  ),
  85 => 
  array (
    'permission_id' => 86,
    'role_id' => 1,
  ),
  86 => 
  array (
    'permission_id' => 87,
    'role_id' => 1,
  ),
  87 => 
  array (
    'permission_id' => 88,
    'role_id' => 1,
  ),
  88 => 
  array (
    'permission_id' => 89,
    'role_id' => 1,
  ),
  89 => 
  array (
    'permission_id' => 90,
    'role_id' => 1,
  ),
  90 => 
  array (
    'permission_id' => 91,
    'role_id' => 1,
  ),
  91 => 
  array (
    'permission_id' => 92,
    'role_id' => 1,
  ),
  92 => 
  array (
    'permission_id' => 93,
    'role_id' => 1,
  ),
  93 => 
  array (
    'permission_id' => 94,
    'role_id' => 1,
  ),
  94 => 
  array (
    'permission_id' => 1,
    'role_id' => 2,
  ),
  95 => 
  array (
    'permission_id' => 2,
    'role_id' => 2,
  ),
  96 => 
  array (
    'permission_id' => 3,
    'role_id' => 2,
  ),
  97 => 
  array (
    'permission_id' => 4,
    'role_id' => 2,
  ),
  98 => 
  array (
    'permission_id' => 25,
    'role_id' => 2,
  ),
  99 => 
  array (
    'permission_id' => 26,
    'role_id' => 2,
  ),
  100 => 
  array (
    'permission_id' => 91,
    'role_id' => 2,
  ),
  101 => 
  array (
    'permission_id' => 92,
    'role_id' => 2,
  ),
  102 => 
  array (
    'permission_id' => 93,
    'role_id' => 2,
  ),
  103 => 
  array (
    'permission_id' => 94,
    'role_id' => 2,
  ),
  104 => 
  array (
    'permission_id' => 1,
    'role_id' => 3,
  ),
  105 => 
  array (
    'permission_id' => 2,
    'role_id' => 3,
  ),
  106 => 
  array (
    'permission_id' => 4,
    'role_id' => 3,
  ),
  107 => 
  array (
    'permission_id' => 25,
    'role_id' => 3,
  ),
  108 => 
  array (
    'permission_id' => 26,
    'role_id' => 3,
  ),
  109 => 
  array (
    'permission_id' => 91,
    'role_id' => 3,
  ),
  110 => 
  array (
    'permission_id' => 92,
    'role_id' => 3,
  ),
  111 => 
  array (
    'permission_id' => 93,
    'role_id' => 3,
  ),
  112 => 
  array (
    'permission_id' => 1,
    'role_id' => 4,
  ),
  113 => 
  array (
    'permission_id' => 2,
    'role_id' => 4,
  ),
  114 => 
  array (
    'permission_id' => 3,
    'role_id' => 4,
  ),
  115 => 
  array (
    'permission_id' => 4,
    'role_id' => 4,
  ),
  116 => 
  array (
    'permission_id' => 25,
    'role_id' => 4,
  ),
  117 => 
  array (
    'permission_id' => 26,
    'role_id' => 4,
  ),
  118 => 
  array (
    'permission_id' => 1,
    'role_id' => 5,
  ),
  119 => 
  array (
    'permission_id' => 2,
    'role_id' => 5,
  ),
  120 => 
  array (
    'permission_id' => 13,
    'role_id' => 5,
  ),
  121 => 
  array (
    'permission_id' => 14,
    'role_id' => 5,
  ),
  122 => 
  array (
    'permission_id' => 25,
    'role_id' => 5,
  ),
  123 => 
  array (
    'permission_id' => 26,
    'role_id' => 5,
  ),
  124 => 
  array (
    'permission_id' => 43,
    'role_id' => 5,
  ),
  125 => 
  array (
    'permission_id' => 44,
    'role_id' => 5,
  ),
  126 => 
  array (
    'permission_id' => 55,
    'role_id' => 5,
  ),
  127 => 
  array (
    'permission_id' => 56,
    'role_id' => 5,
  ),
  128 => 
  array (
    'permission_id' => 67,
    'role_id' => 5,
  ),
  129 => 
  array (
    'permission_id' => 68,
    'role_id' => 5,
  ),
  130 => 
  array (
    'permission_id' => 93,
    'role_id' => 5,
  ),
  131 => 
  array (
    'permission_id' => 94,
    'role_id' => 5,
  ),
  132 => 
  array (
    'permission_id' => 95,
    'role_id' => 5,
  ),
);
        foreach (array_chunk($data_role_has_permissions, 50) as $chunk) {
            DB::table('role_has_permissions')->insert($chunk);
        }
        DB::table('model_has_permissions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
