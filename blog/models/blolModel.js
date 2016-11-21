var db = require('./db.js');
exports.getAll = function(callback){
	var sql = 'select blog.*, usr.username from t_blog blog, t_user usr where blog.user_id = usr.user_id';
	db.query(sql,[],callback);
}
exports.getByBlogId = function(blogId,callback){
	var sql = 'select * from t_blog blog where blogId = blog.blog_id';
	db.query(sql,[blog_id],callback);
}
