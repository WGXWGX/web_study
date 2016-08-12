var util=require('util');
var animal=require('./animal.js');
function Bird(){
	Animal.call(this);
	util.inherits(this,Animal);
	this.say=function(){
		console.log('ji....ji');
	} 
}
module.exports=Bird; 