<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$diynav = <<<EOF

<a id="diy-tg" href="javascript:openDiy();" title="�� DIY ���" class="xi1 xw1" onmouseover="showMenu(this.id)"></a>
<div id="diy-tg_menu" style="display: none;">
<ul>
<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">���ģʽ</a></li>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">�߼�ģʽ</a></li>
</ul>
</div>

EOF;
?>