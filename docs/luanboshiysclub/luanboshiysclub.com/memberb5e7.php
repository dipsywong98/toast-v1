<?xml version="1.0" encoding="gbk"?>
<root><![CDATA[
<div id="main_messaqge_LTgFp">
<div id="layer_login_LTgFp">
<h3 class="flb">
<em id="returnmessage_LTgFp">
����Ҫ�ȵ�¼���ܼ���������</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('', 0, 1);" title="�ر�">�ر�</a></span>
</h3>
<form method="post" autocomplete="off" name="login" id="loginform_LTgFp" class="cl" onsubmit="pwmd5('password3_LTgFp');pwdclear = 1;ajaxpost('loginform_LTgFp', 'returnmessage_LTgFp', 'returnmessage_LTgFp', 'onerror');return false;" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=LTgFp">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="referer" value="http://luanboshiysclub.com/static/js/home.js?7zj" />
<div class="rfm">
<table>
<tr>
<th>
<span class="login_slct">
<select name="loginfield" style="float: left;" width="45" id="loginfield_LTgFp">
<option value="username">�û���</option>
<option value="uid">UID</option>
<option value="email">Email</option>
</select>
</span>
</th>
<td><input type="text" name="username" id="username_LTgFp" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="" /></td>
<td class="tipcol"><a href="member.php?mod=registerr">��������ע��</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="password3_LTgFp">����:</label></th>
<td><input type="password" id="password3_LTgFp" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
<td class="tipcol"><a href="javascript:;" onclick="display('layer_login_LTgFp');display('layer_lostpw_LTgFp');" title="�һ�����">�һ�����</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th>��ȫ����:</th>
<td><select id="loginquestionid_LTgFp" width="213" name="questionid" onchange="if($('loginquestionid_LTgFp').value > 0) {$('loginanswer_row_LTgFp').style.display='';} else {$('loginanswer_row_LTgFp').style.display='none';}">
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
<div class="rfm" id="loginanswer_row_LTgFp"  style="display:none">
<table>
<tr>
<th>��:</th>
<td><input type="text" name="answer" id="loginanswer_LTgFp" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
</tr>
</table>
</div>

<input name="sechash" type="hidden" value="SAaEAhsv0" />

<div class="rfm"><table><tr><th>��֤��: </th><td><input name="seccodeverify" id="seccodeverify_SAaEAhsv0" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec('code', 'SAaEAhsv0')" tabindex="1" />
<a href="javascript:;" onclick="updateseccode('SAaEAhsv0');doane(event);" class="xi2">��һ��</a>
<span id="checkseccodeverify_SAaEAhsv0"><img src="static/image/common/none.gif" width="16" height="16" class="vm" /></span>
<br /><span id="seccode_SAaEAhsv0"></span>
<script type="text/javascript" reload="1">updateseccode('SAaEAhsv0');</script>
</td></tr></table></div>



<div class="rfm  bw0">
<table>
<tr>
<th></th>
<td><label for="cookietime_LTgFp"><input type="checkbox" class="pc" name="cookietime" id="cookietime_LTgFp" tabindex="1" value="2592000"  />�Զ���¼</label></td>
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
<div id="layer_lostpw_LTgFp" style="display: none;">
<h3 class="flb">
<em id="returnmessage3_LTgFp">�һ�����</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="�ر�">�ر�</a></span>
</h3>
<form method="post" autocomplete="off" id="lostpwform_LTgFp" class="cl" onsubmit="ajaxpost('lostpwform_LTgFp', 'returnmessage3_LTgFp', 'returnmessage3_LTgFp', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
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

<div id="layer_message_LTgFp" style="display: none;">
<h3 class="flb" id="layer_header_LTgFp">
<em>�û���¼</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="�ر�">�ر�</a></span>
</h3>
<div class="c"><div class="alert_right">
<div id="messageleft_LTgFp"></div>
<p class="alert_btnleft" id="messageright_LTgFp"></p>
</div>
</div>

<script type="text/javascript" reload="1">
var pwdclear = 0;
function initinput_login() {
document.body.focus();
if($('loginform_LTgFp')) {
$('loginform_LTgFp').username.focus();
}
simulateSelect('loginfield_LTgFp');
}
initinput_login();
showPrompt('custominfo_login_LTgFp', 'mouseover', '��ӭ����', 3000);

function clearpwd() {
if(pwdclear) {
$('password3_LTgFp').value = '';
}
pwdclear = 0;
}
</script>]]></root>