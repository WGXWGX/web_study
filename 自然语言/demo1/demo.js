var fs = require('fs');
var http = require('http');
var encoding = "utf-8";
var result = '';

var testCorpusFile = "";
var fileTestPath = "dicData/TestCorpus.txt";
fs.readFile(fileTestPathFile,encoding,function(err,data){
	testCorpus = data;
	
});

var qiu = "";
var filetPath = "dicData/test.txt";
fs.readFile(filetPath,encoding,function(err,data){
	qiu = data;
	
});

var dic = "";
var dicArr = [];
var fileDicPath = "dicData/dic.txt";
fs.readFile(fileDicPath,encoding,function(err,data){
	var arr = [];
	var str ;
	dic = data;
	dicArr = data.split('\n');
	var maxLenString = maxLenString(dicArr);
	var arrLen = [lenInArr(dicArr,1).push('\n'),lenInArr(dicArr,2),lenInArr(dicArr,3),lenInArr(dicArr,4),lenInArr(dicArr,5),lenInArr(dicArr,6),lenInArr(dicArr,7)];
	var newarr = testCorpus.split('');

	function maxlenString(arr){
		var maxLen = 0;
		var length = arr.length;
		for(var i = 0; i<length ; i++ ){
			if(arr[i].length > maxLen){
				maxLen = arr[i].length;	
			}
		}
		return maxLen;
	}
	
	function lenInArr(arr, len){
		var length = arr.length;
		var newArr = [];
		for(var i = 0;i < length;i++ ){
			if(arr[i].length == len){
				newArr.push(arr[i]);
			}
		}
		return newArr;
	}
	
	// 正向
	function positiveFind(arr){
		var str  = ''
		var num = 7;
		for(var i = num; i>0; i--){
			var narr = arr.slice(0,i).join('');
			for(var j =0 ;j < arrLen[i-1].length ; j++){
				if(narr == arrLen[i-1][j]){
					str += narr;
					for(var k = 0;k < i; k++){
						arr.shift();
					}
					return str;
				}
			}
		}
		if(i == 0){
			arr.shift();
		}
	}
	var result = '';
	while(newarr.length){
		result = result + positiveFind(newarr) + ' ';
	}
	// console.log(result);

	// 反向
	function oppositeFind(arr){
		var str  = ''
		var num = arr.length > 7 ? 7 : arr.length;
		for(var i = num; i>0; i--){
			var narr = arr.slice(arr.length-i).join('');
			for(var j =0 ;j < arrLen[i-1].length ; j++){
				if(narr == arrLen[i-1][j]){
					str += narr;
					for(var k = 0;k < i; k++){
						arr.pop();
					}
					return str;
				}
			}
		}
		if(i == 0){
			arr.pop();
			return '';
		}
	}
	while(newarr.length > 0){
		result = oppositeFind(newarr) +  ' '  + result + ' ' ;
	}
	// console.log(result); 
});










