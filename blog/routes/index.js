var express = require('express');
var router = express.Router();
var welcome = require('../controllers/welcome.js');
router.get('/',welcome.index); //title  �Ǵ�����������title��
router.get('/login',welcome.login);
router.get('/regist',welcome.regist);
router.post('/checkregist',welcome.checkregist);
router.post('/checklogin',welcome.checklogin);
module.exports = router;
//�ҿ�����
