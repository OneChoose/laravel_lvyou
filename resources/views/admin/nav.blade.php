<?php
$arr = explode('/', $_SERVER['REQUEST_URI']);
?>
<div class="row" id="nav_main">
    <div class="col-xs-12">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="<?php echo ($arr[2] == 'site') ? 'active' : ''; ?>">
                <a href="/admin/site/index">站点配置</a>
            </li>
            <li role="presentation" class="<?php echo ($arr[2] == 'article' || $arr[2] == 'category') ? 'active' : ''; ?>">
                <a href="/admin/category">内容管理</a>
            </li>
            <li role="presentation" class="<?php echo ($arr[2] == 'goods' || $arr[2] == 'goods_type') ? 'active' : ''; ?>"><a href="/admin/goods/index">商品管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'room') ? 'active' : ''; ?>"><a href="/admin/room/index">客房管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'food') ? 'active' : ''; ?>"><a href="/admin/food/index">餐饮管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'entertainment') ? 'active' : ''; ?>"><a href="/admin/entertainment/index">休闲娱乐</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'active') ? 'active' : ''; ?>"><a href="/admin/active/index">促销活动</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'member') ? 'active' : ''; ?>"><a href="/admin/member/index">会员管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'order') ? 'active' : ''; ?>"><a href="/admin/order/index/1">订单管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'index' || $arr[2] == 'addManager' || $arr[2] == 'role' || $arr[2] =='addRole') ? 'active' : ''; ?>"><a href="/admin/index">系统管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'income') ? 'active' : ''; ?>"><a href="/admin/income/index">收益管理</a></li>
            <li role="presentation" class="<?php echo ($arr[2] == 'meeting') ? 'active' : ''; ?>"><a href="/admin/meeting/index">会议与宴会</a></li>
        </ul>
    </div>
</div>
</div>