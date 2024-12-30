<?php
// pola segita terbalik
//  $angka = 10;
//     for ($i=0; $i <$angka; $i++) { 
//         for ($j=1; $j <$angka - $i; $j++) {
//             echo "*";
//         }
//         echo "<br/>";
//     }

// $bulan = array ('Januari', 'Februari', 'Maret');
// foreach ($bulan as $index => $nama_bulan) {
// 	echo ($index + 1) . '. ' . $nama_bulan . '<br/>';
// }

/* contoh 2 */

/* inisialisasi variabel mahasiswa */
$mahasiswa = array( "Dono", "Kasino", "indro", "Badil" );

/* ambil data dalam array variabel untuk ditampilkan */
foreach( $mahasiswa as $key=>$nilai ) { 

    echo ($key + 0). '. ' . $nilai . '<br/>';
    
}
// ?>