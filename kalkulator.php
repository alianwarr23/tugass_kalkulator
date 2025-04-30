<?php
function kalkulator($data) {
    if (isset($data['nilaipertama']) && isset($data['nilaikedua']) && isset($data['operator'])) {
        $nilaipertama = $data['nilaipertama'];
        $nilaikedua = $data['nilaikedua'];
        $operator = $data['operator'];
        $hasil = 0;
        $simbol = '';

        if ($operator == '+') {
            $hasil = $nilaipertama + $nilaikedua;
            $simbol = '+';
        } elseif ($operator == '-') {
            $hasil = $nilaipertama - $nilaikedua;
            $simbol = '-';
        } elseif ($operator == 'x') {
            $hasil = $nilaipertama * $nilaikedua;
            $simbol = 'x';
        } elseif ($operator == ':') {
            if ($nilaikedua == 0) {
                return "$nilaipertama : $nilaikedua = Error (bagi 0)";
            }
            $hasil = $nilaipertama/ $nilaikedua;
            $simbol = ':';
        }

        return "$nilaipertama $simbol $nilaikedua = $hasil";
    } else {
        return "Data tidak lengkap.";
    }
}

$data = [
    ['nilaipertama' => 5, 'nilaikedua' => 10, 'operator' => '+'],
    ['nilaipertama' => 5, 'nilaikedua' => 5, 'operator' => 'x'],
    ['nilaipertama' => 6, 'nilaikedua' => 2, 'operator' => ':'],
    ['nilaipertama' => 5, 'nilaikedua' => 2, 'operator' => '-'] 
];

foreach ($data as $item) {
    echo kalkulator($item) . "<br>";
}
?>
