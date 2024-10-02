<?php
echo doctype('html5');
echo heading('Software Engineering!', 1, 'id="headername');
echo br(5);

$image_properties = array(
          'src' => 'https://cc-prod.scene7.com/is/image/CCProdAuthor/mascot-logo-design_P1_900x420?$pjpeg$&jpegSize=200&wid=900','width' => '200','height' => '200','alt' => 'logo');

echo img($image_properties);

$list = array(
            'red', 
            'blue', 
            'green',
            'yellow'
            );

$attributes = array(
                    'class' => 'boldlist',
                    'id'    => 'mylist'
                    );

echo ul($list, $attributes);

