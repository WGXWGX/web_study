var util=require('util');
var animal=require('./animal.js');
function bird(){
	animal.call(this);
	util.inherits(this,animal);
	this.say=function(){
		console.log('ji....ji');
	}
}
var bird=new bird();
exports.say=bird.say();