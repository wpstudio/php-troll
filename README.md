# PHP-TROLL

A basic PHP library to talk to a trollcoind daemon to help you get started integrating Trollcoins with your next web application project.

# Requirements

Requires **trollcoind** to be already installed and running on your local server or reachable by your server.

Get the Trollcoin source from https://github.com/TrollCoinz/TrollCoin

## Usage:

Example usage (for additional examples, check out the examples.php file)

```
require "./Troll.php";

$config = array(
  'user' => 'trollcoind',
  'pass' => '--password--',
  'host' => '127.0.0.1',
  'port' => '22000'
);

// create client connection
$troll = new Troll( $config );

// create new address
$address = $troll->get_address( 'name' );
print( $address );

// check balance
print( "name: " . $troll->get_balance( 'name' ));

// send money externally (withdrawal)
$torll->send( 'name', 'Tfcu1WBnJAYuCxAyY8AVbDFJrVuNCUp36o', 1000 );
```

## About

Library originally created by Marcus Kazmierczak, http://mkaz.com, for Dogecoin

Library adapted and expanded by WPStudio for Leafcoin, Trollcoin, and others.
