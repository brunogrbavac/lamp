<?php
$cfg['blowfish_secret'] = 'arbitrary_string'; /* You should change this for security reasons */
$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['host'] = 'db';
$cfg['Servers'][1]['compress'] = false;
$cfg['Servers'][1]['AllowNoPassword'] = false;