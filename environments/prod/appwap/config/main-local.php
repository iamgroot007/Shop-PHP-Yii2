<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'js1df93ydfh65001fvbbsf24z2mnb',
            'enableCsrfValidation' => false, //关闭csrf验证, 接口形式返回需要，@todo
        ],
    ],
];
