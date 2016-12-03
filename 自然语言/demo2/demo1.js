var fs = require('fs');
var readline = require('readline');
var encoding = "utf-8";
var rl = readline.createInterface({
	input: process.stdin,
	output: process.stdout
});
var textFileQiu = "dicData/TrainingCorpus.txt";
fs.readFile(textFileQiu,encoding,function(err,data){
	var method1 = {};
	var method1Obj = {};
	var method2 = {};
	var method2Obj = {};
	var testCorpus = "";
	testCorpus = data;
	var newT = testCorpus.replace(/\r\n/g,'');
	var arr = newT.split('  ');
	var str = arr.join('');
	arr.pop();
	var s = arr.slice(0,2).join('');
	var reg = new RegExp(s,'g');
	var a = str.match(reg);
	frequent(arr);
	for(var prop in method1){
		method1Obj[prop] = Math.log(method1[prop]/arr.length);
	}
	var method2Len = arr.length;
	for(var i = 0; i < method2Len-1; i++){
		var s = arr.slice(0,2).join('');
		var reg = new RegExp(s,'g');
		var a = str.match(reg);
		var	str1 = arr.shift();
		method2Obj[s] = a.length/method2Len;
		method2[s] = a.length/method2Len/method1Obj[str1];
	}
	function frequent (arr) {
		for(var i = 0 ; i < arr.length ;i++){
			if(!method1[arr[i]]){
				method1[arr[i]] = 1;
			}else{
				method1[arr[i]] ++;
			}
		}
	}
	var file1 = JSON.stringify(method2);
	fs.writeFile('Data/res.json',file1,function(){
	});
	var file2 = JSON.stringify(method1Obj);
	fs.writeFile('Data/res1.json',file2,function(){
	});
	var file3 = JSON.stringify(method1);
	fs.writeFile('Data/res3.json',file3,function(){
	});
	var file4 = JSON.stringify(method2Obj);
	fs.writeFile('Data/res4.json',file4,function(){
	});
});





