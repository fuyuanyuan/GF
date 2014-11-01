<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:38:48
         compiled from "application\views\admin\brand\add.html" */ ?>
<?php /*%%SmartyHeaderCode:355853a23f28f05cd2-05111950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c51672e1afe12e67c2fc383958e8da4fdb7effd0' => 
    array (
      0 => 'application\\views\\admin\\brand\\add.html',
      1 => 1401683516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '355853a23f28f05cd2-05111950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a23f291231d7_64576808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a23f291231d7_64576808')) {function content_53a23f291231d7_64576808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\AppServ\\www\\GF\\application\\libraries\\Smarty\\plugins\\function.base_url.php';
?><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title>GF_SHOP 管理中心 - 添加品牌 </title>
    <meta content="noindex, nofollow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
general.css">
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('B_CSS_DIR');?>
main.css">
    <script src="<?php echo @constant('B_JS_DIR');?>
transport.js" type="text/javascript"></script>
    <script src="<?php echo @constant('B_JS_DIR');?>
common.js" type="text/javascript"></script><script language="JavaScript">
    &lt;!--
    // 这里把JS用到的所有语言都赋值到这里
    var process_request = "正在处理您的请求...";
    var todolist_caption = "记事本";
    var todolist_autosave = "自动保存";
    var todolist_save = "保存";
    var todolist_clear = "清除";
    var todolist_confirm_save = "是否将更改保存到记事本？";
    var todolist_confirm_clear = "是否清空内容？";
    var no_brandname = "您必须输入品牌名称！";
    var require_num = "排序序号必须是一个数字";
    //--&gt;
</script>
</head>
<body>

<h1>
    <span class="action-span"><a href="<?php echo smarty_function_base_url(array('url'=>'admin/brand/show_list'),$_smarty_tpl);?>
">商品品牌</a></span>
    <span class="action-span1"><a href="index.php?act=main">GF_SHOP 管理中心</a> </span><span class="action-span1" id="search_id"> - 添加品牌 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    <form enctype="multipart/form-data" name="theForm" action="<?php echo smarty_function_base_url(array('url'=>'admin/brand/add'),$_smarty_tpl);?>
" method="post">
        <table width="100%" cellspacing="1" cellpadding="3">
            <tbody><tr>
                <td class="label">品牌名称</td>
                <td><input type="text" value="" maxlength="60" name="brand_name"><span class="require-field">*</span></td>
            </tr>
            <tr>
                <td class="label">品牌网址</td>
                <td><input type="text" value="" size="40" maxlength="60" name="brand_url"></td>
            </tr>
            <tr>
                <td class="label"><a title="点击此处查看提示信息" href="javascript:showNotice('warn_brandlogo');">
                    <img width="16" height="16" border="0" alt="点击此处查看提示信息" src="<?php echo @constant('B_IMG_DIR');?>
notice.gif"></a>品牌LOGO</td>
                <td>
                    <input type="file" size="45" id="logo" name="brand_logo">
                    <br><span id="warn_brandlogo" style="display:block" class="notice-span"> 请上传图片，做为品牌的LOGO！        </span>
                </td>
            </tr>
            <tr>
                <td class="label">品牌描述</td>
                <td><textarea rows="4" cols="60" name="brand_desc"></textarea></td>
            </tr>
            <tr>
                <td class="label">排序</td>
                <td><input type="text" value="50" size="15" maxlength="40" name="sort_order"></td>
            </tr>
            <tr>
                <td class="label">是否显示</td>
                <td><input type="radio" checked="checked" value="1" name="is_show"> 是
                    <input type="radio" value="0" name="is_show"> 否        (当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><br>
                    <input type="submit" value=" 确定 " class="button">
                    <input type="reset" value=" 重置 " class="button">
                    <input type="hidden" value="insert" name="act">
                    <input type="hidden" value="" name="old_brandname">
                    <input type="hidden" value="" name="id">
                    <input type="hidden" value="" name="old_brandlogo">
                </td>
            </tr>
            </tbody></table>
    </form>
</div>
<script src="<?php echo @constant('B_JS_DIR');?>
utils.js" type="text/javascript"></script><script src="<?php echo @constant('B_JS_DIR');?>
validator.js" type="text/javascript"></script>
<script language="JavaScript">
    &lt;!--
            document.forms['theForm'].elements['brand_name'].focus();
    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
    }
    /**
     * 检查表单输入的数据
     */
    function validate()
    {
        validator = new Validator("theForm");
        validator.required("brand_name",  no_brandname);
        validator.isNumber("sort_order", require_num, true);
        return validator.passed();
    }
    //--&gt;
</script>

<div id="footer">
    @copyright BY gf_shop Thinks !</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
    <table width="100%" border="0" bgcolor="#cfdef4" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td width="30" height="24" style="color: #0f2c8c"></td>
            <td width="100%" valign="center" style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px"> 新订单通知</td>
            <td width="19" valign="center" align="right" style="padding-top: 2px;padding-right:2px"><span onclick="Message.close()" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" title="关闭">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
        </tr>
        <tr>
            <td height="70" colspan="3" style="padding-right: 1px; padding-bottom: 1px">
                <div id="popMsgContent">
                    <p>您有 <strong id="spanNewOrder" style="color:#ff0000">1</strong> 个新订单以及       <strong id="spanNewPaid" style="color:#ff0000">0</strong> 个新付款的订单</p>
                    <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
                </div>
            </td>
        </tr>
        </tbody></table>
</div>

<!--
<embed src="<?php echo @constant('B_IMG_DIR');?>
online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object width="1" height="1" id="msgBeep" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
    <param value="<?php echo @constant('B_IMG_DIR');?>
online.swf" name="movie">
    <param value="high" name="quality">
    <embed width="0" height="0" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash" type="application/x-shockwave-flash" quality="high" id="msgBeep" name="msgBeep" src="<?php echo @constant('B_IMG_DIR');?>
online.swf">

</object>

<script language="JavaScript">
    document.onmousemove=function(e)
    {
        var obj = Utils.srcElement(e);
        if (typeof(obj.onclick) == 'function' &amp;&amp; obj.onclick.toString().indexOf('listTable.edit') != -1)
        {
            obj.title = '点击修改内容';
            obj.style.cssText = 'background: #278296;';
            obj.onmouseout = function(e)
            {
                this.style.cssText = '';
            }
        }
        else if (typeof(obj.href) != 'undefined' &amp;&amp; obj.href.indexOf('listTable.sort') != -1)
        {
            obj.title = '点击对列表排序';
        }
    }
            &lt;!--


    var MyTodolist;
    function showTodoList(adminid)
    {
        if(!MyTodolist)
        {
            var global = $import("<?php echo @constant('B_JS_DIR');?>
global.js","js");
            global.onload = global.onreadystatechange= function()
            {
                if(this.readyState &amp;&amp; this.readyState=="loading")return;
                var md5 = $import("<?php echo @constant('B_JS_DIR');?>
md5.js","js");
                md5.onload = md5.onreadystatechange= function()
                {
                    if(this.readyState &amp;&amp; this.readyState=="loading")return;
                    var todolist = $import("<?php echo @constant('B_JS_DIR');?>
todolist.js","js");
                    todolist.onload = todolist.onreadystatechange = function()
                    {
                        if(this.readyState &amp;&amp; this.readyState=="loading")return;
                        MyTodolist = new Todolist();
                        MyTodolist.show();
                    }
                }
            }
        }
        else
        {
            if(MyTodolist.visibility)
            {
                MyTodolist.hide();
            }
            else
            {
                MyTodolist.show();
            }
        }
    }

    if (Browser.isIE)
    {
        onscroll = function()
        {
            //document.getElementById('calculator').style.top = document.body.scrollTop;
            document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
        }
    }

    if (document.getElementById("listDiv"))
    {
        document.getElementById("listDiv").onmouseover = function(e)
        {
            obj = Utils.srcElement(e);

            if (obj)
            {
                if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
                else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
                else return;

                for (i = 0; i &lt; row.cells.length; i++)
                {
                    if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
                }
            }

        }

        document.getElementById("listDiv").onmouseout = function(e)
        {
            obj = Utils.srcElement(e);

            if (obj)
            {
                if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
                else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
                else return;

                for (i = 0; i &lt; row.cells.length; i++)
                {
                    if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
                }
            }
        }

        document.getElementById("listDiv").onclick = function(e)
        {
            var obj = Utils.srcElement(e);

            if (obj.tagName == "INPUT" &amp;&amp; obj.type == "checkbox")
            {
                if (!document.forms['listForm'])
                {
                    return;
                }
                var nodes = document.forms['listForm'].elements;
                var checked = false;

                for (i = 0; i &lt; nodes.length; i++)
                {
                    if (nodes[i].checked)
                    {
                        checked = true;
                        break;
                    }
                }

                if(document.getElementById("btnSubmit"))
                {
                    document.getElementById("btnSubmit").disabled = !checked;
                }
                for (i = 1; i &lt;= 10; i++)
                {
                    if (document.getElementById("btnSubmit" + i))
                    {
                        document.getElementById("btnSubmit" + i).disabled = !checked;
                    }
                }
            }
        }

    }

    //--&gt;
</script>

</body></html><?php }} ?>
