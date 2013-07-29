<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-23 18:17 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit">欢迎登陆 <?php echo $this->_vars['QISHI']['site_name']; ?>
 管理中心！</div>
  <div class="clear"></div>
</div>
<span id="version"></span>
<?php if ($this->_vars['admin_register_globals']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#990000"  style=" margin-bottom:6px; color:#FFFFFF">
  <tr>
    <td bgcolor="#CC0000">&nbsp;<?php echo $this->_vars['admin_register_globals']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_vars['install_warning']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#FF9900"  style=" margin-bottom:6px;">
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;<?php echo $this->_vars['install_warning']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_vars['update_warning']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#FF9900"  style=" margin-bottom:6px;">
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;<?php echo $this->_vars['update_warning']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_vars['admindir_warning']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#FF9900"  style=" margin-bottom:6px;">
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;<?php echo $this->_vars['admindir_warning']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<div class="toptit">待处理事务</div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="link_lan" style="padding-left:15px; line-height:220%; margin-bottom:10px; color:#666666">
      <tr>
        <td width="300"  >待审核职位：&nbsp;<a href="admin_company.php?jobtype=2&audit=2" id="t1">...</a></td>
		  
        <td  >待审核简历：&nbsp;<a href="admin_personal.php?audit=2&tabletype=2" id="t2">...</a></td>
      </tr>
      <tr>
        <td  >待认证企业：&nbsp;<a href="admin_company.php?act=company_list&audit=2" id="t3">...</a></td>
		  
        <td  >待开通高级人才：&nbsp;<a href="admin_personal.php?talent=3" id="t4">...</a></td>
      </tr>
      <tr>
        <td  >待付款订单：&nbsp;<a href="admin_company.php?act=order_list&is_paid=1" id="t5">...</a>		  </td>
        <td  >待审核照片 ：&nbsp;<a href="admin_personal.php?act=list&photo_audit=2" id="t6">...</a></td>
      </tr>
      <tr>
        <td  >举报信息：&nbsp;<a href="admin_feedback.php?act=report_list" id="t7">...</a>		  </td>
        <td  >待回复的意见/建议：&nbsp; <a href="admin_feedback.php?act=suggest_list&replyinfo=1" id="t8">...</a> </td>
      </tr>
  </table>


<div class="toptit">最近30天会员注册趋势</div>

<script language="JavaScript" src="js/FusionCharts.js"></script>
<div id="chartdiv"  > 
        FusionCharts. 
		</div>
<script type="text/javascript">
		   var chart = new FusionCharts("statement/area2D.swf", "ChartId", "800", "150");
		   chart.setDataURL("statement/userreg_30_days.xml");		   
		   chart.render("chartdiv");
		</script>
<script type="text/javascript">
		var tsTimeStamp= new Date().getTime();
		$.get("admin_ajax.php", {"act":"total"},
			function (data,textStatus)
			 {		
				 var str=data.split(",");
				 var i=1;
				 for (x in str)
					{
					$("#t"+i).html(str[x]);
					i++;
					}
			 }
		);
</script>
<div class="toptit">骑士cms人才系统</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style=" line-height:220%; color:#666666; padding-left:15px;"><table border="0" cellpadding="0" cellspacing="0" class="link_lan">
      <tr>
        <td width="300"  >系统当前版本：v<?php echo $this->_vars['system_info']['version']; ?>
.<?php echo $this->_vars['system_info']['release']; ?>
</td>
        <td  >认证授权：<span id="certification">载入中...</span>
        </td>
      </tr>
      <tr>
        <td  >版权所有：骑士cms<br /></td>
        <td  > 官方论坛：<a href="http://www.74cms.com" target="_blank">www.74cms.com</a></td>
      </tr>
      <tr>
        <td  >程序开发：74cms程序开发组</td>
        <td  >官方论坛：<a href="http://www.74cms.com/bbs" target="_blank">www.74cms.com/bbs/</a></td>
      </tr>
    </table></td>
  </tr>
</table>
<div class="toptit">系统信息</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style="  color:#666666; padding-left:15px;line-height:220%;">
	<table border="0" cellpadding="0" cellspacing="0" class="link_lan">
      <tr>
        <td width="300"  >操作系统：<?php echo $this->_vars['system_info']['os']; ?>
</td>
        <td  >PHP 版本：<?php echo $this->_vars['system_info']['php_ver']; ?>
</td>
      </tr>
      <tr>
        <td  >服务器软件：<?php echo $this->_vars['system_info']['web_server']; ?>
<br /></td>
        <td  >MySQL 版本：<?php echo $this->_vars['system_info']['mysql_ver']; ?>
</td>
      </tr>
    </table></td>
  </tr>
</table>
<div class="toptit">官方动态</div>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td style=" line-height:220%; color:#666666; padding-left:15px;">
	<span id="announcement" class="link_lan">载入中...</span>
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
<script src="http://www.74cms.com/plus/external.php?version=<?php echo $this->_vars['system_info']['version']; ?>
&release=<?php echo $this->_vars['system_info']['release']; ?>
&certification=<?php echo $this->_vars['site_domain']; ?>
&announcement=1" language="javascript"></script>
</html>