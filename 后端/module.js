var hello=require('./getMoudle');//1
var hello = new hello();
hello.setName();
hello.getName();




var hello=require('./getMoudle').hello;//2
var hello = new hello();
hello.setName();
hello.getName();




