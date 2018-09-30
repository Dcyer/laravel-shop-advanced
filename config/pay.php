<?php

return [
    'alipay' => [
        'app_id'         => '2016080500174978',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvfjY2JmpEFt+c/HhxD4po8rUH8hZ+orVzJHdLdXnioKSSWhBHD/6is3WbbX5o69bZET7yRiVjpay6xvNmg3/838KQ9fwSC42gUeDERCYD0JHYTnkMO0QLZn20GhA/AH/bog19NRgjlHevg/tspentdNgCEIvGXzBkuZzLxv8akTzA/edYNTdbNE1ZGn90TY3tUx7pCbO2wO0NJAz2/dp4P0vep+RiNqyHwE26Qimn1XUMybMS2D+f4TSU/YpVY7SIxnOa/Ixl4Hly7pvqCcGrTuB2sj4cp6eE17xUFA09RczckfRr08ampz0lAbmFozm3etIMEDx5tR+FMwFptnzCwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAvUsRCzT1i81Oz/MCuEey1qJDHcah/DoGw795sgTIfnPJxuBM1zZYAQj+RqckM5fjvFFsXwe8Sy342X3P+cW7f+sNWcGRnJkdP2iQWOFEK+CM6A1Qc+b2/DLBbl0PyaRb+bNVe22LskcT4yesuNOSSWb9QDipqEY5baWLJ4905np7ZdwiSE/NaVspQn4QDiWhspKJOp8Idp2A54hfv97PpjVHT8DZEfNWTDn6yZidlOuh1BRWASbH4wUQlXoGSRVnxP0x3xQVNrle6au+C7IDWwx9zLTg86gBtE60JOmywufH4p5A8ehlI+8SLdAZWyMU/gk66WeTvow0ilHRqZR5jwIDAQABAoIBAHwDig8FizkkMNYcJ1QD5S6o77+6OrW8bmIgN+JhL9loknEw0ibM+6rx8WToa9dBU3o0/gLkVoAKhlY3DuJcoRKVNBHxtywZRAgewTL5omf8nVQKJQNJ9dYUipV7crRwcbGNxBsxEayi1GyluYr9UYG1b4V7mesc1tL2+cvZOIUl6EGXagiWomo86ZlT6FwWw1GKQyzjGMfV84ghNQovHsuYmeYAmnQ7mnlA4OHAZx/XjyFCba1NRcUR2B5IknGUZKEYnsvNeM9YVQnsHI4azy3F4l5tsduNBn8BSgGzntu6CSjnlrFj7GRz9uVQQJmNk9t3kXdd/WW/9aS4aMPug0ECgYEA69Z7jEkurIau+4aeEpFMRiCTnukoUPzi64nK3UHslHuQZYuTyCtJlTTSN4YodAg4wLQ5IkthS3p9teiugXHu/VnekWEa5L2EtRSb+dHmwgvb0dMzjRCgVz/ZOQc8RfDJv1yo+KZoKfTzuXnF9yyPTfuZOguCmGJivIYU7u+NOB0CgYEAzXnqLPauxrq0dJPGadwPsLYF2eo0tx/GugKnogAv5mOyD83YEFj2FIkZeeMH71sBHJmfTGtwX3DtEKVBI9sRfI8Z25CM7tvXGYeXepz2uZo87fbVa0ywjjFxd9rFIMro0eP33Ex8qr++8JGnXI38ZYG5t2q0cZVSLvYtoxIJgJsCgYAPLbzB6KviWsDEW4Os+kEIemxF3AfGPqB0PGgcGXQakmFWx8b5KSARRFcLT80muqi8bl0HAgb/DqEspg8lMaoKEFCs1q0eb7ws02i+iW3qq0y4knlM6PcI5okajIaqkbbKZDJT3pHxsVxGYboGEI4gnMLd44PCPwLP02lhf3V9WQKBgQDIebiXIh+oWaWTUFL4GfNdEFtpH+9K9D/qYIi5sMELYh3q+YVjfciqhJFMsMufJwVQqDoaT4EWPZGu+e0yVJ0dEGnEJaa7rdaSXA7ZXKgEso3cB0Z3KB3ivi7dJ5/JvO+nSWsdj6ra1bYv9Yx66zVkvEs8v2lKoMvMcfhY8FJBHQKBgQCIRNA/HqMMblDnPd36WE73E+b8CavxVKDpanc3DrxYDhpTHtzC7Oz8ohaCvuaeRQJi+H0EFFcI8iXboXNhG4M/0AZpNgv8RKAB0mBDA1WU8FKkl1C4VVhbEuuC/rmu3XYlxZD+15kE2HZODNNm1wnhTrW658s8yNZ2EEirtEpoAg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
