<?php

return array(
    'decryptData'=>array(
        'sessionKey'=>'',
        'openId'=>'',
        'code'=>'',
        'rawData'=>'',
        'signature'=>'',
        'encryptedData'=>'',
        'iv'=>''
    ),
    'createWXAQRCode'=>array(
        'path'=>'',
        'width'=>430
    ),
    'getWXACode'=>array(
        'path'=>'',
        'width'=>430,
        'auto_color'=>false,
        'line_color'=>array('r'=>0, 'g'=>0, 'b'=>0),
        'is_hyaline'=>false
    ),
    'getWXACodeUnlimit'=>array(
        'scene'=>'',
        'page'=>'page/index/index',
        'width'=>430,
        'auto_color'=>false,
        'line_color'=>array('r'=>0, 'g'=>0, 'b'=>0),
        'is_hyaline'=>false
    ),
    'addTemplate'=>array(
        'id'=>'',
        'keyword_id_list'=>array()
    ),
    'deleteTemplate'=>array(
        'template_id'=>''
    ),
    'getTemplateLibraryById'=>array(
        'id'=>''
    ),
    'getTemplateLibraryList'=>array(
        'offset'=>0,
        'count'=>10
    ),
    'getTemplateList'=>array(
        'offset'=>0,
        'count'=>10
    ),
    'sendTemplateMessage'=>array(
        'touser'=>'',
        'template_id'=>'',
        'page'=>'',
        'form_id'=>'',
        'data'=>array(),
        'emphasis_keyword'=>''
    ),
    'sendUniformMessage'=>array(
        'touser'=>'',
        'weapp_template_msg'=>array(),
        'mp_template_msg'=>array()
    )
);