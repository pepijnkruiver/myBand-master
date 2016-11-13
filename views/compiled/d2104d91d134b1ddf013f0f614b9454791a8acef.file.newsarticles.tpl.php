<?php /* Smarty version Smarty-3.1.18, created on 2016-11-13 13:04:07
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2243157f4f74e064c25-45280840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1479038606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2243157f4f74e064c25-45280840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f74e113019_88866003',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'total_number_articles' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f74e113019_88866003')) {function content_57f4f74e113019_88866003($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\myBand-master\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\myBand-master\\libs\\plugins\\modifier.truncate.php';
?><div class="news">
   <div class="homearticle">

<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
       <section>
    <img src=img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
    <div class="opzij">
    <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],150);?>
</p>
        </div>
       </section>
    <?php } ?>

       </div>
        </div>

   
<div class="page">
<ul>
  <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_articles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_articles']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <li><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
<?php }} ?>
</ul>
    </div>
    




<?php }} ?>
