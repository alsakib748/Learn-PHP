<?php 

// echo  md5("Al Sakib Ayon")." = ".strlen(md5("Al Sakib Ayon")).PHP_EOL;

// echo strlen(md5("A quick brown fox jumps over the lazy dog"));

    // echo md5("Let There be light").PHP_EOL;
    // echo md5("Let There be lights").PHP_EOL;
    // // echo md5("let there be light");

    // echo "SHA1 = ".sha1("Let There be light").PHP_EOL;
    // echo "SHA1 = ".strlen(sha1("Al Sakib Ayon"));

    print_r(hash_algos());

    echo hash("sha512","Al Sakib Ayon").PHP_EOL;

    echo hash("tiger128,3","Al Sakib Ayon").PHP_EOL;

    echo hash("xxh128","Al Sakib Ayon");

    // echo bin2hex(mhash(MHASH_MD5,"Al Sakib Ayon")).PHP_EOL;

    // echo bin2hex(mhash(MHASH_SHA512,"Al Sakib Ayon")).PHP_EOL;

    // echo bin2hex(mhash(MHASH_GOST,"Al Sakib Ayon")).PHP_EOL;

    // echo bin2hex(mhash(MHASH_WHIRLPOOL,"Al Sakib Ayon"));


?>