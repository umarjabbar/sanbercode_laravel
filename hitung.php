<?php 
// ------- Algoritma --------
// 1. Menangkap data yang dikirim dan mengidentifikasi operator matematikanya
// 2. Mengambail angka pertama / angka sebelum operator matematika
// 3. Mengambil angka kedua / angka sesudah operator matematika
// 4. Melakukan operasi matematika sesuai dengan simbonya
// 5. Mengembalikan hasil

function hitung($string_data)
{
  $panjang = strlen($string_data);
  $kali = strpos($string_data, "*");
  $tambah = strpos($string_data, "+");
  $kurang = strpos($string_data, "-");
  $bagi = strpos($string_data, ":");
  $modulus = strpos($string_data, "%");

  // Jika Perkalian
  if($kali == true):
    $depan = null;
    for($i = 0; $i < $kali; $i++):
      $depan .= $string_data[$i]; 
    endfor;
    $belakang = null;
    for($j = $kali+1; $j < $panjang; $j++):
      $belakang .= $string_data[$j];
    endfor;
    return (int)$depan * $belakang;

  //Jika Penjumlahan 
  elseif($tambah == true):
    $depan = null;
    for($i = 0; $i < $tambah; $i++):
      $depan .= $string_data[$i]; 
    endfor;
    $belakang = null;
    for($j = $tambah+1; $j < $panjang; $j++):
      $belakang .= $string_data[$j];
    endfor;
    return (int)$depan + (int)$belakang;
  
    // Jika Pengurangan
  elseif($kurang == true):
    $depan = null;
    for($i = 0; $i < $kurang; $i++):
      $depan .= $string_data[$i]; 
    endfor;
    $belakang = null;
    for($j = $kurang+1; $j < $panjang; $j++):
      $belakang .= $string_data[$j];
    endfor;
    return (int)$depan - (int)$belakang;
  
    // Jika Pembagian
  elseif($bagi == true):
    $depan = null;
    for($i = 0; $i < $bagi; $i++):
      $depan .= $string_data[$i]; 
    endfor;
    $belakang = null;
    for($j = $bagi+1; $j < $panjang; $j++):
      $belakang .= $string_data[$j];
    endfor;
    return (int)$depan / (int)$belakang;
    
  // Jika Modulus
  elseif($modulus == true):
    $depan = null;
    for($i = 0; $i < $modulus; $i++):
      $depan .= $string_data[$i]; 
    endfor;
    $belakang = null;
    for($j = $modulus+1; $j < $panjang; $j++):
      $belakang .= $string_data[$j];
    endfor;
    return (int)$depan % (int)$belakang;

  else:
    return "Masukan dengan benar!";
  endif;
}


// TEST CASES
echo hitung("102*2") . "<br>"; //204
echo hitung("2+3") . "<br>"; //5
echo hitung("100:25") . "<br>"; //4
echo hitung("10%2") . "<br>"; //0
echo hitung("99-2") . "<br>"; //97