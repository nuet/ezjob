<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-11 11:15 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
<div class="toptip">
	<h2>提示：</h2>
	<p>
整合UCenter完毕后自动生成以下配置信息，多数情况修无需编辑此信息。
</p>
</div>
<div class="toptit">编辑UCenter整合信息</div>
 
 
 <table width="100%" border="0" cellspacing="0" cellpadding="4">
 
    <tr>
      <td style=" line-height:220%; color:#666666; padding-left:15px;">
	    <form id="form1" name="form1" method="post" action="?act=uc_set_save">
	    <table>
<tr>
   <td colspan="2" align="left">应用ID：<?php echo $this->_vars['uc_config']['appid']; ?>
</td>
</tr>
<tr>
    <td><input type="text" name="uc_config[appid]" value="<?php echo $this->_vars['uc_config']['appid']; ?>
"  class="input_text_200" /></td>
    <td>填写UCenter添加应用的id。</td>
 </tr>
<tr>
   <td colspan="2" align="left">服务端地址:</td>
</tr>
<tr>
   <td width="200"><input type="text" name="uc_config[ucapi]" value="<?php echo $this->_vars['uc_config']['ucapi']; ?>
"  class="input_text_200"/></td>
   <td>在您 UCenter地址或者目录改变的情况下，修改此项，一般情况请不要改动
				  例如: http://www.site.com/ucenter (最后不要加'/')。</td>
</tr>
<tr>
    <td colspan="2" align="left">服务端 IP:</td>
</tr>
<tr>
    <td><input type="text" name="uc_config[ucip]" value="<?php echo $this->_vars['uc_config']['ucip']; ?>
"  class="input_text_200" /></td>
    <td>正常情况下留空即可。如果由于域名解析问题导致 UCenter 与该应用通信失败，请尝试设置为该应用所在服务器的 IP 地址。</td>
 </tr>
<tr>
    <td colspan="2" align="left">通信密钥:</td>
 </tr>
 <tr>
    <td><input type="text" name="uc_config[uckey]"  value="<?php echo $this->_vars['uc_config']['uckey']; ?>
"  class="input_text_200"/></td>
    <td>只允许使用英文字母及数字，限 64 字节。应用端的通信密钥必须与此设置保持一致，否则该应用将无法与 UCenter 正常通信</td>
</tr>
<tr>
    <td colspan="2" align="left">连接方式:</td>
</tr>
    <tr>
        <td>      
        <select name="uc_config[ucconnect]" onChange="if(this.value==''){document.getElementById('ucmysql').style.display = 'none';}else{document.getElementById('ucmysql').style.display = '';}" style=" width:207px;font-size:12px;">
			<option value="mysql" <?php if ($this->_vars['uc_config']['ucconnect'] == 'mysql'): ?>selected="selected"<?php endif; ?>> 数据库方式(MySQL) </option>
			<option value="" <?php if ($this->_vars['uc_config']['ucconnect'] == ''): ?>selected="selected"<?php endif; ?>> 接口方式(fsockopen) </option>
        </select>
        </td>
        <td>请根据您的服务器网络环境选择适当的连接方式</td>
    </tr>

    <tr>
        <td colspan="2">
            <table id="ucmysql" >
                <tr>
                    <td colspan="2" align="left">数据库服务器:</td>
                </tr>
                <tr>
                    <td width="200">
                    <input type="text"   name="uc_config[ucdbhost]" value="<?php echo $this->_vars['uc_config']['ucdbhost']; ?>
"  class="input_text_200"/>                  </td>
                    <td>默认:localhost, 如果 MySQL 端口不是默认的 3306，请填写如下形式：127.0.0.1:端口号</td>
                </tr>
                
                <tr>
                    <td colspan="2" align="left">数据库用户名:</td>
                </tr>
                <tr>
                    <td>
                    <input type="text"   name="uc_config[ucdbuser]" value="<?php echo $this->_vars['uc_config']['ucdbuser']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>登录uc服务端的数据库用户名</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">数据库密码:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text" name="uc_config[ucdbpw]" value="<?php echo $this->_vars['uc_config']['ucdbpw']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>登录uc服务端数据库使用的密码</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">数据库名:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text"  name="uc_config[ucdbname]" value="<?php echo $this->_vars['uc_config']['ucdbname']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>uc服务端的数据库名称。</td>		
                </tr>
                
                <tr>
                    <td colspan="2" align="left">数据库表前缀:</td>
                </tr>                
                <tr>
                    <td>
                    <input type="text"   name="uc_config[ucdbtablepre]" value="<?php echo $this->_vars['uc_config']['ucdbtablepre']; ?>
" class="input_text_200"/>	
                    </td>
                    <td>uc服务端使用的数据库表前缀</td>		
                </tr>
            </table>            
        </td>
    </tr>    
    
    <tr>
        <td colspan="2" align="left">正确的配置信息:</td>
    </tr>
    <tr>
        <td>
            <textarea  onFocus="this.select()" style="width:200px; height:100px; font-size:14px; font-family: Arial, Helvetica, sans-serif">
define('UC_CONNECT', '<?php echo $this->_vars['uc_config']['ucconnect']; ?>
');
define('UC_DBHOST', '<?php echo $this->_vars['uc_config']['ucdbhost']; ?>
');
define('UC_DBUSER', '<?php echo $this->_vars['uc_config']['ucdbuser']; ?>
');
define('UC_DBPW', '********');
define('UC_DBNAME', '<?php echo $this->_vars['uc_config']['ucdbname']; ?>
');
define('UC_DBCHARSET', '<?php echo $this->_vars['uc_config']['ucdbcharest']; ?>
');
define('UC_DBTABLEPRE', '<?php echo $this->_vars['uc_config']['ucdbtablepre']; ?>
');
define('UC_DBCONNECT', '0');
define('UC_KEY', '<?php echo $this->_vars['uc_config']['uckey']; ?>
');
define('UC_API', '<?php echo $this->_vars['uc_config']['ucapi']; ?>
');
define('UC_CHARSET', '<?php echo $this->_vars['uc_config']['uccharest']; ?>
');
define('UC_IP', '<?php echo $this->_vars['uc_config']['ucip']; ?>
');
define('UC_APPID', '<?php echo $this->_vars['uc_config']['ucappid']; ?>
');
define('UC_PPP', '20');
            </textarea>
        </td>
        <td>当应用的 UCenter 配置信息丢失时可复制左侧的代码到应用的配置文件中</td>
    </tr>
	<tr>
    <td height="88" colspan="2">
      <input name="save" type="submit" class="admin_submit"    value="修改"/></td>
  </tr>
</table>
        </form>
	  </td>
    </tr>
  </table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>