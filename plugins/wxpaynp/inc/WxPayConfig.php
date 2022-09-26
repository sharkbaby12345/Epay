<?php
//微信支付v3配置文件

$pay_config = [
    //服务商应用ID
    'appid' => $channel['appid'],

    //服务商户号
    'mchid' => $channel['appmchid'],

    //子商户应用ID（可留空）
    'subAppid' => '',

    //子商户号
    'subMchid' => $channel['appurl'],

    //APIv3密钥
    'apiv3Key' => $channel['appsecret'],

    //「商户API证书」文件路径
    'merchantPrivateKeyFilePath' => PAY_ROOT.'cert/apiclient_key.pem',

    //「商户API证书」的「证书序列号」
    'merchantCertificateSerial' => $channel['appkey'],

    //「微信支付平台证书」文件路径
    'platformCertificateFilePath' => PAY_ROOT.'cert/cert.pem',
];

if(file_exists(PAY_ROOT.'cert/'.$channel['appmchid'].'/apiclient_key.pem')){
    $pay_config['merchantPrivateKeyFilePath'] = PAY_ROOT.'cert/'.$channel['appmchid'].'/apiclient_key.pem';
	$pay_config['platformCertificateFilePath'] = PAY_ROOT.'cert/'.$channel['appmchid'].'/cert.pem';
}

return $pay_config;