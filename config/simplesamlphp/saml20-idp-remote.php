<?php
/*
$metadata['__DYNAMIC:1__'] = [
    'host' => '__DEFAULT__',
    'privatekey' => 'server.pem',
    'certificate' => 'server.crt',
    'auth' => 'default-sp',
    'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'authproc' => [
      // Convert LDAP names to oids.
      100 => ['class' => 'core:AttributeMap', 'name2oid'],
    ],
];
*/
/*
 * We use the '__DYNAMIC:1__' entity ID so that the entity ID
 * will be autogenerated.
 */
$metadata['http://localhost:8080/simplesaml/saml2/idp/metadata.php'] = [
    /*
     * We use '__DEFAULT__' as the hostname so we won't have to
     * enter a hostname.
     */
    'host' => '__DEFAULT__',

    /* The private key and certificate used by this IdP. */
    'certificate' => 'server.crt',
    'privatekey' => 'server.pem',

    /*
     * The authentication source for this IdP. Must be one
     * from config/authsources.php.
     */
    'auth' => 'example-userpass',
];

