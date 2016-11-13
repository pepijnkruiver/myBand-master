<?php /* Smarty version Smarty-3.1.18, created on 2016-11-12 08:30:52
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291558258accddfb78-46619125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478935797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291558258accddfb78-46619125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58258acce5bef1_53979153',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58258acce5bef1_53979153')) {function content_58258acce5bef1_53979153($_smarty_tpl) {?><script>

function showUser(str) {
    console.log(str);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","model/search.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<div class="search">
    <div class="search2">
        <div class="search3">
<h1>Search</h1>
<div class="zoek">
<form action="model/search.php">
  <input type="text" name="Code"  onKeyup="showUser(this.value)">
</form>
    </div>
<div id="txtHint"></div>
    
    
    </div>
    </div>
</div><?php }} ?>
