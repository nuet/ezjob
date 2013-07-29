<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-23 18:17 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
  <div class="toptip">
	<h2>提示：</h2>
	<p>当进行了数据恢复、升级或者工作出现异常的时候，您可以使用本功能重新生成缓存。更新缓存的时候，可能让服务器负载升高，请尽量避开会员访问的高峰时间 <br />
数据缓存：更新网站设置、积分规则、邮件设置等缓存 <br />
模板缓存：更新模板、风格等缓存文件，当您修改了模板或者风格，但是没有立即生效的时候使用 </p>
  </div>
<div class="toptit">更新选项</div>
  <form id="form1" name="form1" method="post" action="?act=clear_cache"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
      <td height="60" style=" line-height:220%; color:#666666;">
	  <table width="600" height="100" border="0" cellpadding="2" cellspacing="2" id="selecttplcache">
        <tr>
          <td height="45" align="center"><label ><input  type="checkbox" checked="checked" value="datacache" name="type[]" />
        数据缓存</label> <label >
        <input id="tplcache" type="checkbox"   value="tplcache" name="type[]" checked="checked"  />
       模板缓存</label></td>
        </tr>
        <tr>
          <td height="45" align="center"><input name="submit" type="submit" class="admin_submit"    value="确定" onclick="document.getElementById('selecttplcache').style.display='none';document.getElementById('hide').style.display='block';"/></td>
        </tr>
      </table>      
        <table width="600" height="100" border="0" cellpadding="5" cellspacing="0" id="hide" style="display:none">
          <tr>
            <td align="center" valign="bottom"><img src="images/ajax_loader.gif"  border="0" /></td>
          </tr>
          <tr>
            <td align="center" valign="top" style="color: #009900">正在更新缓存，请稍候......</td>
          </tr>
        </table></td>
    </tr>
  </table>
  </form>  
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>