<table id="list2"></table>
<div id="pager2"></div>

<div id="dialog" title="Basic dialog">
	<table id="list3"></table>
	<div id="pager3"></div>
</div>

<script>
jQuery("#list2").jqGrid({
   	url:'default/grid',
	datatype: "json",
   	colNames:['ID','商品编号', '商品名称', '单位', '数量', '单价', '金额', '状态', '备注'],
   	colModel:[
   		{name:'id',index:'id', width:50},
   		{name:'invdate',index:'invdate', width:90,editable:true},
   		{name:'name',index:'name asc, invdate', width:150,editable:true},
   		{name:'amount1',index:'amount1', width:30, align:"center"},
   		{name:'amount',index:'amount', width:80, align:"right",editable:true,editrules:{number:true}},
   		{name:'tax',index:'tax', width:80,align:"right",editable:true,editrules:{number:true}},
		{name:'total',index:'total', width:80,align:"right"},
		{name:'total2',index:'total', width:50,align:"right"},
   		{name:'note',index:'note', width:170, sortable:false}
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager2',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption:"进货单",
    	forceFit : true,
    cellEdit: true,
    cellsubmit: 'clientArray',
    afterEditCell: function (id,name,val,iRow,iCol){
		if(name=='invdate') {
			jQuery("#"+iRow+"_invdate","#list2").datepicker({dateFormat:"yy-mm-dd"});
		}
		if(name == 'name') {
			jQuery("#list3").jqGrid({
   	url:'default/grid',
	datatype: "json",
   	colNames:['ID','商品编号', '商品名称1', '单位', '数量', '单价', '金额', '状态', '备注'],
   	colModel:[
   		{name:'id',index:'id', width:50},
   		{name:'invdate',index:'invdate', width:90,editable:true},
   		{name:'name',index:'name asc, invdate', width:150,editable:true},
   		{name:'amount1',index:'amount1', width:30, align:"center"},
   		{name:'amount',index:'amount', width:80, align:"right",editable:true,editrules:{number:true}},
   		{name:'tax',index:'tax', width:80,align:"right",editable:true,editrules:{number:true}},
		{name:'total',index:'total', width:80,align:"right"},
		{name:'total2',index:'total', width:50,align:"right"},
   		{name:'note',index:'note', width:170, sortable:false}
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager2',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption:"进货单"
			});
			jQuery("#list3").jqGrid('navGrid','#pager3',{edit:true,add:true,del:true});
			$('#dialog').dialog('open');
			return false;
		}
	},
	afterSaveCell : function(rowid,name,val,iRow,iCol) {
		if(name == 'amount') {
			var taxval = jQuery("#list2").jqGrid('getCell',rowid,iCol+1);
			jQuery("#list2").jqGrid('setRowData',rowid,{total:parseFloat(val)*parseFloat(taxval)});
		}
		if(name == 'tax') {
			var amtval = jQuery("#list2").jqGrid('getCell',rowid,iCol-1);
			jQuery("#list2").jqGrid('setRowData',rowid,{total:parseFloat(val)*parseFloat(amtval)});
		}
	}

});
jQuery("#list2").jqGrid('navGrid','#pager2',{edit:true,add:true,del:true});
$(function(){
		$('#dialog').dialog({
			autoOpen: false,
			show: 'blind',
			hide: 'explode'
		});


});
</script>