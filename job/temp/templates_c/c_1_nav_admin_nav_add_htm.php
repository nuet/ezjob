<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-07-28 13:19 CST */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
 
	$(":radio[name='urltype']").click(function(){
	if ($(":radio[name='urltype'][checked]").val()=="0")
	{
		$(".sys").show();
		$(".http").hide();
	}
	else
	{
		$(".sys").hide();
		$(".http").show();
	}
 
	})
})
</script>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("nav/admin_nav_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
<h2>��ʾ��</h2>
<p>
����Ǳ�վ����ַ������дΪ���Ŀ¼��Ե�ַ���� index.php<br />
���������Ӧ��������������ַ���磺http://www.74cms.com/bbs��
</p>
</div>
<div class="toptit">����������</div>
  <form action="?act=site_navigation_add_save" method="post"   name="form1" id="form1"> 
  <?php echo $this->_vars['inputtoken']; ?>

<table border="0" cellspacing="5" cellpadding="1" >
		<tr>
            <td width="100" align="right">���ͣ�</td>
            <td>
			<label><input name="urltype" type="radio" value="0" checked="checked"    />ϵͳ����</label>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<label><input name="urltype" type="radio" value="1"    />��������</label>
			</td>
		</tr>
          <tr>
            <td width="100" align="right">��Ŀ����(����)��</td>
            <td><input name="title" type="text"  class="input_text_200" id="title" value="" maxlength="30"/></td>
          </tr>
          <tr class="http" style=" display:none">
            <td align="right">���ӵ�ַ��</td>
            <td><input name="url" type="text"  class="input_text_200" id="url" value="" maxlength="180"/>
     </td>
          </tr>
		  <tr class="sys">
            <td align="right">ϵͳҳ�棺</td>
            <td>
			<select name="systemalias" style="width:205px; font-size:12px;"  onchange="selChangesystemalias(this.value)">
			 <?php if (count((array)$this->_vars['syspage'])): foreach ((array)$this->_vars['syspage'] as $this->_vars['list']): ?>
			  <option value="<?php echo $this->_vars['list']['alias']; ?>
,<?php echo $this->_vars['list']['tag']; ?>
"><?php echo $this->_vars['list']['pname']; ?>
</option>
			  <?php endforeach; endif; ?>
              </select>
			  
			</td>
          </tr>
		   <tr class="sys">
            <td align="right">ϵͳҳ��ID��</td>
            <td><input name="pagealias" type="text" value="" class="input_text_200" /></td>
          </tr>
		  <tr class="sys">
            <td align="right">����ID��</td>
            <td><input name="list_id" type="text" value="" class="input_text_200" /> �����ĿΪ��Ϣ�б�ҳ����Ҫ��д����ID</td>
          </tr>
		  <tr >
            <td align="right">���</td>
            <td>
			 <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
			<label>
              <input name="alias" type="radio" value="<?php echo $this->_vars['list']['alias']; ?>
" <?php if ($this->_vars['category']['0']['alias'] == $this->_vars['list']['alias']): ?> checked="checked" <?php endif; ?>/>
              <?php echo $this->_vars['list']['categoryname']; ?>
</label>
              &nbsp;&nbsp;&nbsp;&nbsp;
			   <?php endforeach; endif; ?>
           
			</td>
          </tr>
          <tr>
            <td align="right">�򿪷�ʽ��</td>
            <td><label>
              <input name="target" type="radio" value="_blank" checked="checked" />
              �´���</label>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input name="target" type="radio" value="_self">
                ��ǰ����</label></td>
          </tr>
          <tr>
            <td align="right">��ʾ˳��</td>
            <td><input name="navigationorder" type="text"  class="input_text_200" id="navigationorder" value="0" maxlength="3"  />            </td>
          </tr>
          <tr>
            <td align="right">�Ƿ���ʾ��</td>
            <td><label>
              <input name="display" type="radio" value="1"  checked="checked" />
              ��ʾ</label>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input name="display" type="radio" value="0">
                ����</label>            </td>
          </tr>
		       <tr>
            <td align="right">��ʾ��ɫ��</td>
            <td>
			<div class="color_layer">	
			 <input type="text" name="tit_color" id="tit_color" style="display:none">
	<div id="color_box" onclick="color_box_display()" ></div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_select_color.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</div>
			</td>
          </tr>
		  <tr>
            <td align="right">����������ǣ�</td>
            <td>
 <input name="tag" type="text"  class="input_text_200" id="tag" value="" maxlength="30"/>
			</td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td height="80">
			<input type="submit" name="Submit3" value="ȷ���ύ" class="admin_submit"   />
<input name="submit222" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/></td>
          </tr>
        </table>
  </form>
</div>
<script>
function selChangesystemalias(obj)
{
var str=obj.split(",");
//alert (str[0]);
document.getElementById("pagealias").value=str[0];
document.getElementById("tag").value=str[1];
//alert(obj);
}
selChangesystemalias("<?php echo $this->_vars['systemalias']['0']['alias']; ?>
,");
//////-----
</script>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>