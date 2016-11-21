var userModel = require('../models/userModel.js');
var blogModel = require('../models/blogModel.js');
exports.index = function(req, res) {
        blogModel.getAll(function(result){
                res.render('index',{
                    user:req.session.user,
                    blogs:result
                });
        });
}
exports.login = function(req, res) {
    res.render('login');
}
exports.regist = function(req, res) {
    res.render('regist');
}  
exports.view = function(req,res){
    var blogId = req.query.blogId;
    blogModel.getByBlogId(blogId,function(result){
        if(result.length > 0){
            res.render('view',{
                blogs:result
            }); 
        }
    });
}      
exports.checklogin = function(req, res) {
    var username = req.body.username;
    var pass = req.body.pass;
    userModel.getByNamePass(username,pass,function(result){
        if(result.length > 0){
            req.session.user = result[0];  //固定语法  当两个包加载，app.js配置还有这句话
            // blogModel.getAll(function(result){
            //     res.render('index',{
            //         user:req.session.user,
            //         blogs:res
            //     });
            // });
           res.redirect('/');
        }
    });
}
exports.checkregist = function(req, res) {
    var username = req.body.username;
    var pass = req.body.pass;
    var sex = req.body.sex;
    userModel.save(username,pass,sex,function(result){
        if(result.affectedRows > 0){
            res.redirect('/login');
        }
    });
}

