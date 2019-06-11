<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['http://app.example.com'] = array(
    'AssertionConsumerService' => 'http://localhost:4502/content/saml_login',
    'SingleLogoutService' => 'http://localhost:8080/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
);

