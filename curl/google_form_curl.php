<?php

$data = [
    [
        "fname" => "H Rahman",
        "lname" => "jim",
        "email" => "hrj75@gmail.com",
        "phone" => "019524328747",
        "district" => "notullabad"
    ],
    [
        "fname" => "Sayed Najmul",
        "lname" => "Hasan",
        "email" => "najmul57@gmail.com",
        "phone" => "01675894213",
        "district" => "vandaria"
    ],
    [
        "fname" => urlencode("Milon Kumar"),
        "lname" => urlencode("Bhattacharjo"),
        "email" => "milon12@gmail.com",
        "phone" => "01736391254",
        "district" => "jhalokhati"
    ],
    [
        "fname" => urlencode("জানে"),  /// %E0%A6%9C%E0%A6%BE%E0%A6%A8%E0%A7%87&
        "lname" => urlencode("ডিওই"),  /// %E0%A6%A1%E0%A6%BF%E0%A6%93%E0%A6%87
        "email" => "jane87@gmail.com",
        "phone" => "89673297",
        "district" => "new work"
    ]
];
// জানে ডিওই
foreach ($data as $val) {
    $ch = curl_init("https://docs.google.com/forms/u/1/d/e/1FAIpQLScb2roVgBS7436V0jSLspiF7L-GcqjnsjsZQmyoiYX9AWYDyQ/formResponse?pli=1");

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.700901903={$val['fname']}&entry.430758562={$val['lname']}&entry.282384353={$val['email']}&entry.459275925={$val['phone']}&entry.250838099={$val['district']}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    if (curl_error($ch)) {
        echo curl_error($ch);
    } else {
        echo $result;
    }
}



?>