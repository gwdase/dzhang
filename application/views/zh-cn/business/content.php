<table id="list2"></table>
<div id="pager2"></div>
<script>
jQuery("#list2").jqGrid({
   	url:'default/grid',
	datatype: "json",
   	colNames:['ID','商品编号', '商品名称', '规格','库存数量','成本均价','库存总价'],
   	colModel:[
   		{name:'id',index:'id', width:75},
   		{name:'invdate',index:'invdate', width:90},
   		{name:'name',index:'name asc, invdate', width:100},
   		{name:'amount',index:'amount', width:80, align:"right"},
   		{name:'tax',index:'tax', width:80, align:"right"},		
   		{name:'total',index:'total', width:80,align:"right"},		
   		{name:'note',index:'note', width:250, sortable:false}		
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager2',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption:"库存测试"
});
jQuery("#list2").jqGrid('navGrid','#pager2',{edit:true,add:true,del:true});
</script>