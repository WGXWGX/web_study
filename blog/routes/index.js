var express = require('express');
var router = express.Router();
var welcome = require('../controllers/welcome.js');
router.get('/',welcome.index); //title  是传给服务器端title的
router.get('/login',welcome.login);
router.get('/regist',welcome.regist);
router.post('/checkregist',welcome.checkregist);
router.post('/checklogin',welcome.checklogin);
module.exports = router;
//找控制器
