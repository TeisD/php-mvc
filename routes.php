<?php

Flight::route('/', array('MainController', 'index'));

Flight::route('/hello', function(){
    echo "Hello!";
});

Flight::route('/hello/@name', array('MainController', 'test'));

Flight::route('/item', function(){
    $user = new Item("Foo", "Bar");
    $user->foo = "Boo";
    $user->bar = "Far";
    print_r($user->FooBar());
});

Flight::route('/get', function(){
    $data = array(
        'name' => Flight::request()->query->name
    );
    Flight::view()->display('template.html', $data);
});
