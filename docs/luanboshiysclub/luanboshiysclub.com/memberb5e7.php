<?xml version="1.0" encoding="gbk"?>
<root><![CDATA[
<div id="main_messaqge_L0c9D">
<div id="layer_login_L0c9D">
<h3 class="flb">
<em id="returnmessage_L0c9D">
您需要先登录才能继续本操作</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('', 0, 1);" title="关闭">关闭</a></span>
</h3>
<form method="post" autocomplete="off" name="login" id="loginform_L0c9D" class="cl" onsubmit="pwmd5('password3_L0c9D');pwdclear = 1;ajaxpost('loginform_L0c9D', 'returnmessage_L0c9D', 'returnmessage_L0c9D', 'onerror');return false;" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=L0c9D">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="referer" value="http://luanboshiysclub.com/static/js/home.js?7zj" />
<div class="rfm">
<table>
<tr>
<th>
<span class="login_slct">
<select name="loginfield" style="float: left;" width="45" id="loginfield_L0c9D">
<option value="username">用户名</option>
<option value="uid">UID</option>
<option value="email">Email</option>
</select>
</span>
</th>
<td><input type="text" name="username" id="username_L0c9D" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="" /></td>
<td class="tipcol"><a href="member.php?mod=registerr">请用中文注册</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="password3_L0c9D">密码:</label></th>
<td><input type="password" id="password3_L0c9D" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
<td class="tipcol"><a href="javascript:;" onclick="display('layer_login_L0c9D');display('layer_lostpw_L0c9D');" title="找回密码">找回密码</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th>安全提问:</th>
<td><select id="loginquestionid_L0c9D" width="213" name="questionid" onchange="if($('loginquestionid_L0c9D').value > 0) {$('loginanswer_row_L0c9D').style.display='';} else {$('loginanswer_row_L0c9D').style.display='none';}">
<option value="0">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select></td>
</tr>
</table>
</div>
<div class="rfm" id="loginanswer_row_L0c9D"  style="display:none">
<table>
<tr>
<th>答案:</th>
<td><input type="text" name="answer" id="loginanswer_L0c9D" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
</tr>
</table>
</div>

<input name="sechash" type="hidden" value="SArXmH8x0" />

<div class="rfm"><table><tr><th>验证码: </th><td><input name="seccodeverify" id="seccodeverify_SArXmH8x0" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec('code', 'SArXmH8x0')" tabindex="1" />
<a href="javascript:;" onclick="updateseccode('SArXmH8x0');doane(event);" class="xi2">换一个</a>
<span id="checkseccodeverify_SArXmH8x0"><img src="static/image/common/none.gif" width="16" height="16" class="vm" /></span>
<br /><span id="seccode_SArXmH8x0"></span>
<script type="text/javascript" reload="1">updateseccode('SArXmH8x0');</script>
</td></tr></table></div>



<div class="rfm  bw0">
<table>
<tr>
<th></th>
<td><label for="cookietime_L0c9D"><input type="checkbox" class="pc" name="cookietime" id="cookietime_L0c9D" tabindex="1" value="2592000"  />自动登录</label></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table width="100%">
<tr>
<th>&nbsp;</th>
<td>
<button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1"><strong>登录</strong></button>
</td>
<td>
</td>
</tr>
</table>
</div>

</div>
</form>
</div>
<div id="layer_lostpw_L0c9D" style="display: none;">
<h3 class="flb">
<em id="returnmessage3_L0c9D">找回密码</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="关闭">关闭</a></span>
</h3>
<form method="post" autocomplete="off" id="lostpwform_L0c9D" class="cl" onsubmit="ajaxpost('lostpwform_L0c9D', 'returnmessage3_L0c9D', 'returnmessage3_L0c9D', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
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
<th><label for="lostpw_username">用户名:</label></th>
<td><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table>
<tr>
<th></th>
<td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>提交</span></button></td>
</tr>
</table>
</div>
</div>
</form>
</div>
</div>

<div id="layer_message_L0c9D" style="display: none;">
<h3 class="flb" id="layer_header_L0c9D">
<em>用户登录</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="关闭">关闭</a></span>
</h3>
<div class="c"><div class="alert_right">
<div id="messageleft_L0c9D"></div>
<p class="alert_btnleft" id="messageright_L0c9D"></p>
</div>
</div>

<script type="text/javascript" reload="1">
var pwdclear = 0;
function initinput_login() {
document.body.focus();
if($('loginform_L0c9D')) {
$('loginform_L0c9D').username.focus();
}
simulateSelect('loginfield_L0c9D');
}
initinput_login();
showPrompt('custominfo_login_L0c9D', 'mouseover', '欢迎回来', 3000);

function clearpwd() {
if(pwdclear) {
$('password3_L0c9D').value = '';
}
pwdclear = 0;
}
</script>]]></root>