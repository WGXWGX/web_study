function hello(){
	var name;
	exports.setName=function(name){
		name=name;
	}
	exports.getName=function(name){
		console.log(name);
	}
}

moudle.exports=hello;//直接当成模块暴露//1
exports.hello=hello;//2，只能返回对象
//二者区别，require只认识moudle.exports