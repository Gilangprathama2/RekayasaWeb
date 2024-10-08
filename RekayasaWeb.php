<?php
// Membuat variabel JSON
$jsonData = '{
    "nama": "Gilang Abie Prathama",
    "umur": 22,
    "jurusan": "Teknik Informatika",
    "hobi": ["Ngoding", "Bermain Game", "Mendengarkan Musik"]
}';

// Decode JSON menjadi PHP Object
$dataObject = json_decode($jsonData);

// Akses nilai dari PHP Object
echo "<h3>Hasil Decode ke PHP Object</h3>";
echo "Nama: " . $dataObject->nama . "<br>";
echo "Umur: " . $dataObject->umur . "<br>";
echo "Jurusan: " . $dataObject->jurusan . "<br>";
echo "Hobi pertama: " . $dataObject->hobi[0] . "<br>";

// Decode JSON menjadi PHP Array
$dataArray = json_decode($jsonData, true);

// Akses nilai dari PHP Array
echo "<h3>Hasil Decode ke PHP Array</h3>";
echo "Nama: " . $dataArray['nama'] . "<br>";
echo "Umur: " . $dataArray['umur'] . "<br>";
echo "Jurusan: " . $dataArray['jurusan'] . "<br>";
echo "Hobi pertama: " . $dataArray['hobi'][0] . "<br>";
?>
