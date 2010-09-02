<script language="javascript" type="text/javascript">
//<![CDATA[
$(function(){
    $('#business_bar').menuActive();
});
//]]>
</script>
<h3>进货管理</h3>
    <ul>
        <li id="Purchase" class="active">进货单</li>
        <li id="PurchaseList"><a href="{[siteurl uri='purchase/list']}">退货单</a></li>
    </ul>
    <h3>销售管理</h3>
    <ul>
        <li id="Order"><a href="{[siteurl uri='order']}">销售单</a></li>
        <li id="OrderShop"><a href="{[siteurl uri='order/shop']}">退货单</a></li>
    </ul>
    <h3>库存管理</h3>
    <ul>
        <li id="StoreGoods"><a href="{[siteurl uri='store/goods']}">入库单</a></li>
        <li id="StoreManager"><a href="{[siteurl uri='store/manager']}">出库单</a></li>
        <li id="StoreSales"><a href="{[siteurl uri='store/sales']}">调价单</a></li>
	<li id="StoreSales"><a href="{[siteurl uri='store/sales']}">调拨单</a></li>
    </ul>