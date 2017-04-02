<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 02/04/2017
 * Time: 19:16
 */
$kassid= array(
    array('nimi'=>'Miisu', 'vanus'=>2, 'kaal'=>'11kg', 'omanik'=>'Malle', 'sugu'=>'isane', 'pilt'=>'http://siitsealt.ee/wp-content/uploads/2015/12/5-8.jpg'),
        array('nimi'=>'Imperaator', 'vanus'=>3, 'kaal'=>'7kg', 'omanik'=>'Kersti', 'sugu'=>'isane', 'pilt'=>'http://siitsealt.ee/wp-content/uploads/2015/12/2-11.jpg'),
            array('nimi'=>'Kullake', 'vanus'=>6, 'kaal'=>'6kg', 'omanik'=>'Kalle', 'sugu'=>'emane', 'pilt'=>'http://g3.nh.ee/images/pix/900x598/EVv3HJNn9NM/584a356e1784b0f465-73915683.jpg'),
                array('nimi'=>'Kerberos', 'vanus'=>11, 'kaal'=>'12kg', 'omanik'=>'Ansip', 'sugu'=>'isane', 'pilt'=>'http://static1.fotoalbum.ee/fotoalbum/2/513/02513498c7607.jpg'),
);
foreach($kassid as $e){
  include('7s.html');
}