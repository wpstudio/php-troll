<?php

## Simple command-line script to show examples

require "./Troll.php";

$config = array(
    'user' => 'trollcoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22001' );

// create client conncetion
$troll = new Troll( $config );

// create a new address
$address = $troll->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $troll->list_accounts() );

// get balance in wallet
print( "name: " . $troll->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$troll->move( 'name2', 'name', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$troll->send( 'name', 'Tfcu1WBnJAYuCxAyY8AVbDFJrVuNCUp36o', 100 );


