<?xml version="1.0" encoding="gbk"?>
<root><![CDATA[
<div id="main_messaqge_LYutG">
<div id="layer_login_LYutG">
<h3 class="flb">
<em id="returnmessage_LYutG">
����Ҫ�ȵ�¼���ܼ���������</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('', 0, 1);" title="�ر�">�ر�</a></span>
</h3>
<form method="post" autocomplete="off" name="login" id="loginform_LYutG" class="cl" onsubmit="pwmd5('password3_LYutG');pwdclear = 1;ajaxpost('loginform_LYutG', 'returnmessage_LYutG', 'returnmessage_LYutG', 'onerror');return false;" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=LYutG">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="referer" value="http://luanboshiysclub.com/static/js/home.js?7zj" />
<div class="rfm">
<table>
<tr>
<th>
<span class="login_slct">
<select name="loginfield" style="float: left;" width="45" id="loginfield_LYutG">
<option value="username">�û���</option>
<option value="uid">UID</option>
<option value="email">Email</option>
</select>
</span>
</th>
<td><input type="text" name="username" id="username_LYutG" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="" /></td>
<td class="tipcol"><a href="member.php?mod=registerr">��������ע��</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="password3_LYutG">����:</label></th>
<td><input type="password" id="password3_LYutG" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
<td class="tipcol"><a href="javascript:;" onclick="display('layer_login_LYutG');display('layer_lostpw_LYutG');" title="�һ�����">�һ�����</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th>��ȫ����:</th>
<td><select id="loginquestionid_LYutG" width="213" name="questionid" onchange="if($('loginquestionid_LYutG').value > 0) {$('loginanswer_row_LYutG').style.display='';} else {$('loginanswer_row_LYutG').style.display='none';}">
<option value="0">��ȫ����(δ���������)</option>
<option value="1">ĸ�׵�����</option>
<option value="2">үү������</option>
<option value="3">���׳����ĳ���</option>
<option value="4">������һλ��ʦ������</option>
<option value="5">�����˼�������ͺ�</option>
<option value="6">����ϲ���Ĳ͹�����</option>
<option value="7">��ʻִ�������λ����</option>
</select></td>
</tr>
</table>
</div>
<div class="rfm" id="loginanswer_row_LYutG"  style="display:none">
<table>
<tr>
<th>��:</th>
<td><input type="text" name="answer" id="loginanswer_LYutG" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
</tr>
</table>
</div>

<input name="sechash" type="hidden" value="SAs0h5RJ0" />

<div class="rfm"><table><tr><th>��֤��: </th><td><input name="seccodeverify" id="seccodeverify_SAs0h5RJ0" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec('code', 'SAs0h5RJ0')" tabindex="1" />
<a href="javascript:;" onclick="updateseccode('SAs0h5RJ0');doane(event);" class="xi2">��һ��</a>
<span id="checkseccodeverify_SAs0h5RJ0"><img src="static/image/common/none.gif" width="16" height="16" class="vm" /></span>
<br /><span id="seccode_SAs0h5RJ0"></span>
<script type="text/javascript" reload="1">updateseccode('SAs0h5RJ0');</script>
</td></tr></table></div>



<div class="rfm  bw0">
<table>
<tr>
<th></th>
<td><label for="cookietime_LYutG"><input type="checkbox" class="pc" name="cookietime" id="cookietime_LYutG" tabindex="1" value="2592000"  />�Զ���¼</label></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table width="100%">
<tr>
<th>&nbsp;</th>
<td>
<button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1"><strong>��¼</strong></button>
</td>
<td>
</td>
</tr>
</table>
</div>

</div>
</form>
</div>
<div id="layer_lostpw_LYutG" style="display: none;">
<h3 class="flb">
<em id="returnmessage3_LYutG">�һ�����</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="�ر�">�ر�</a></span>
</h3>
<form method="post" autocomplete="off" id="lostpwform_LYutG" class="cl" onsubmit="ajaxpost('lostpwform_LYutG', 'returnmessage3_LYutG', 'returnmessage3_LYutG', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="handlekey" value="lostpwform" />
<div class="rfm">
<table>
<tr>
<th><span class="rq">*</span><label for="lostpw_email">Email:</label></th>
<td><input type="text" name="email" id="lostpw_email" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="lostpw_username">�û���:</label></th>
<td><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table>
<tr>
<th></th>
<td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>�ύ</span></button></td>
</tr>
</table>
</div>
</div>
</form>
</div>
</div>

<div id="layer_message_LYutG" style="display: none;">
<h3 class="flb" id="layer_header_LYutG">
<em>�û���¼</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="�ر�">�ر�</a></span>
</h3>
<div class="c"><div class="alert_right">
<div id="messageleft_LYutG"></div>
<p class="alert_btnleft" id="messageright_LYutG"></p>
</div>
</div>

<script type="text/javascript" reload="1">
var pwdclear = 0;
function initinput_login() {
document.body.focus();
if($('loginform_LYutG')) {
$('loginform_LYutG').username.focus();
}
simulateSelect('loginfield_LYutG');
}
initinput_login();
showPrompt('custominfo_login_LYutG', 'mouseover', '��ӭ����', 3000);

function clearpwd() {
if(pwdclear) {
$('password3_LYutG').value = '';
}
pwdclear = 0;
}
</script>]]></root>