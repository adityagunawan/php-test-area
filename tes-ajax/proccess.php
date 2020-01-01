<?php
    if (!empty($_POST)) {
        $arr = [
                [
                   'value' => 'satu'
                ],
                [
                    'value' => 'dua'
                ],
                [
                    'value' => 'tiga'
                ]
                ];
        echo json_encode($arr);
    }
?>