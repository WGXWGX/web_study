<style>
    .clearpaddingleft{
        padding-left: 0px;
    }
    .panel-body{
        height:1000px;
    }
    .important{
        color: #000;
    }
</style>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<section class="panel">
    <header class="panel-heading">
        请按表单输入房源信息
    </header>
    <div class="panel-body">
        <form role="form">
            <div class="form-group">
                <label for="city" class="col-sm-2 clearpaddingleft">城市</label>
                <input type="text" class="form-control" id="city" placeholder="输入城市">
            </div>
            <div class="form-group">
                <label for="street" class="col-sm-2 clearpaddingleft">城区</label>
                <input type="text" class="form-control" id="street" placeholder="输入城区">
            </div>
            <div class="form-group">
                <label for="road" class="col-sm-2 clearpaddingleft">街道</label>
                <input type="text" class="form-control" id="road" placeholder="输入街道">
            </div>
            <div class="form-group">
                <label for="add_type" class="col-sm-3 clearpaddingleft">选择房屋类型</label>
                <div class="col-lg-3 clearpaddingleft">
                    <select class="form-control m-bot15" name="add_type" id="add_type">
                    </select>
                </div>
                <label for="add_rent_type" class="col-sm-3 clearpaddingleft">选择租赁类型</label>
                <div class="col-lg-3 clearpaddingleft">
                    <select class="form-control m-bot15" name="add_rent_type" id="add_rent_type">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="add_facilitys" class="col-sm-3 clearpaddingleft">请勾选房屋设施</label>
                <div class="col-sm-9 icheck clearpaddingleft" id="facilitys_select">
                </div>
            </div>
            <div class="form-group">
                    <label for="" class="col-sm-3 clearpaddingleft">租金</label>
                    <div class="input-group col-lg-3 m-bot15 clearpaddingleft">
                        <span class="input-group-addon">￥</span>
                        <input type="text" class="form-control" name="add_price">
                        <span class="input-group-addon ">.00</span>
                    </div>
            </div>
            <div class="form-group">
                    <label for="add_isorder" class="col-sm-2 clearpaddingleft">是否已租</label>
                    <div class="col-lg-2 clearpaddingleft">
                        <select class="form-control m-bot15" name="add_isorder" id="add_isorder">
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label for="add_house_img" class="col-sm-2 clearpaddingleft important" >上传房源图片</label>
                <div class="col-lg-3  clearpaddingleft">
                    <input type="file" id="add_house_img" name="img">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-10 control-label clearpaddingleft" for="add_describe">房屋描述（可插入图片）</label>
                <div class="col-sm-10 clearpaddingleft">
                    <textarea rows="6" class="form-control" name="img_describe" id="add_describe"></textarea>
                </div>
            </div>
        </div>
        </form>

    </div>
</section>
<script>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="img_describe"]', {
            resizeType : 1,
            allowPreviewEmoticons : false,
            allowImageUpload : false,
            items : [
                'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'emoticons', 'image', 'link']
        });
    });
</script>
