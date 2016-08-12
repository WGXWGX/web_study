var util=require('util');
var animal=require('./animal.js');
function duck(){
	animal.call(this);
	util.inherits(this,animal);
	this.say=function(){
		console.log('ga.....ga');
	}
}
var duck=new duck();
exports.say=duck.say();