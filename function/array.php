<?php
    // Array
        // Indexed Array
        $a = ['BMW', 'Honda', 'Suzuki'];
        // var_dump($a);

        // Associative Array
        $b = [
            'Indoenesia' => 'Nasi Padang',
            'Singapura' => 'Nasi Lemak',
            'Amerika' => 'Nasi Kebuli'
        ];
        // var_dump($b);
        
        // Multidimension Array {array di dalam array}
        $c = [
            'a' => $a,
            'b' => $b
        ];
        // echo $b['Indoenesia'];

        $d = [
            'c' => $c,
            'lainya' => ['1,2,3,4,5,6,']
        ];
        // var_dump($d);
        echo $d['c']['a'][1];
?>