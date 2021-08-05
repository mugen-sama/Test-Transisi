<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Nama : Sulton Daud Ul Mukarobin

PHP Dasar I

1. Nilai ujian sebuah kelas tersimpan dalam sebuah string berikut :
$nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7 nilai terendah dari nilai-nilai di atas.

<?php 

$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

//persiapan array
function sortNilai($nilai)
{
    $arrayNilai = explode(" ", $nilai);
    arsort($arrayNilai, SORT_NUMERIC);

    return $arrayNilai;
}

//nilai rata-rata
function nilaiRata2($arrayNilai)
{
    $jmlBilangan = count($arrayNilai);
    $totalNilai = array_sum($arrayNilai);
    $rata2Nilai = $totalNilai/$jmlBilangan;

    return 'Nilai rata-rata adalah =' . $rata2Nilai;
}

//7 nilai tertinggi
function tujuhTertinggi($arrayNilai)
{
    $tertinggi = array_slice($arrayNilai, 0, 7, true);
    $nilaiTertinggi = implode($tertinggi);

    return '7 Nilai tertinggi adalah = ' . $nilaiTertinggi;
}

//7nilai terendah
function tujuhTerendah($arrayNilai)
{
    $terendah = array_slice($arrayNilai, -7, 7, true);
    $nilaiTerendah = implode($terendah);

    return '7 Nilai terendah adalah = ' . $nilaiTerendah;
}

sortNilai($nilai);
tujuhTertinggi($nilaiTertinggi);
tujuhTerendah($nilaiTerendah);

?>


2. Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.
Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI” mengandung 3 buah huruf kecil.

<?php

$kata = "TranSISI";

//Hitung banyaknya huruf kecil
function hitungStrLower($kata)
{
    $kecilSemua = strtolower($kata);
    $hurufKecil = similar_text($kata, $kecilSemua);

    return 'Huruf kecil dari string berjumlah = ' . $hurufKecil;
}

hitungStrLower($kata);

?>


3. Buatlah sebuah fungsi dalam PHP untuk membentuk unigram, bigram, trigram dari sebuah string.
Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka akan menghasilkan output :
● Unigram : jakarta, adalah, ibukota, negara, republik, indonesia
● Bigram : jakarta adalah, ibukota negara, republik indonesia
● Trigram : jakarta adalah ibukota, negara republik indonesia

<?php
	
	function generateUBT($input)
	{
		$arr_input = explode(' ', $input);

		// unigram
		$unigram = '';
		foreach ($arr_input as $item) {
			$unigram .= $item.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// bigram
		$x = 0;
		$bigram = '';
		foreach ($arr_input as $item) {
			if ($x < 1) {
				$bigram .= $item.' ';
				$x++;
			} else {
				$bigram .= $item.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// trigram
		$y = 0;
		$trigram = '';
		foreach ($arr_input as $item) {
			if ($y < 2) {
				$trigram .= $item.' ';
				$y++;
			} else {
				$trigram .= $item.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		$result = 'Unigram : '. $unigram . '<br>';
		$result .= 'Bigram : '. $bigram . '<br>';
		$result .= 'Trigram : '. $trigram;

		return $result;
	}

	echo generateUBT('Jakarta adalah ibukota negara Republik Indonesia');
  
	// Unigram : Jakarta, adalah, ibukota, negara, Republik, Indonesia
	// Bigram : Jakarta adalah, ibukota negara, Republik Indonesia
	// Trigram : Jakarta adalah ibukota, negara Republik Indonesia

?>



</body>
</html>
