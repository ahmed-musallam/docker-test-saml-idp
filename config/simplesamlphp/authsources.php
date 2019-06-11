<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user:user' => array(
            'uid' => array('3'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user@example.com',
        ),
        'user1:user1' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
        ),
        'user2:user2' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
    ),
    'default-sp' => array(
        'saml:SP',
        'entityID' => 'aem-sample-sp',
        'RelayState' => 'http://localhost:4502',
    ),

);
