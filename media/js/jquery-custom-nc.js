/*-------------------------------------------自定义插件开始---------------------------------------*/
jQuery.fn.extend({
   ajaxloading: function(text,time) {
       var $oObj = this;
       var $sText;
       if(text)
          $sText = text;
       else
          $sText = "loading....";
       this.html("<div style='background:#4B981D url(../../img/ico_loading.gif) no-repeat 5% center;width:200px;line-height:20px;height:20px;color:#fff;text-align:center;font-weight:normal;font-size:12px;margin:0px auto;position:absolute;z-index:99;left:45%;top:30px;'>"+$sText+"</div>").show();
       if(time)
           setTimeout(function(){$oObj.children().fadeOut("slow")},time);
   },
   ajaxloadingno:function(text,time) {
       var $oObj = this;
       var $sText;
       if(text)
          $sText = text;
       else
          $sText = "loading....";
       this.html("<div style='background:#4B981D;width:160px;px;line-height:20px;height:20px;color:#fff;text-align:center;font-weight:bold;font-size:12px;margin:0px auto;position:absolute;z-index:99;left:45%;top:30px;'>"+$sText+"</div>").show();
       if(time)
           setTimeout(function(){$oObj.children().fadeOut("slow")},time);
   },
   pos:function() {
        var o = this[0];
        if(o.offsetParent) {
        for(var posX=0, posY=0; o.offsetParent; o=o.offsetParent){
        posX += o.offsetLeft;
        posY += o.offsetTop;
        }
        return {x:posX, y:posY};
        } else return {x:o.x, y:o.y};
    },
	/*复选框全选*/
	checkall:function(value) {
		var oObj = this;
		oObj.click(function(){
   	    if (oObj.attr("checked") == true) {
   		    $("input[name='"+value+"']").each(function(){
   			    $(this).attr("checked", true);
   		    });
   	    } else {
   		    $("input[name='"+value+"']").each(function(){
   			    $(this).attr("checked", false);
   		    });
   	    }
        });
    },
	/*悬停换色*/
    stripe:function() {
		var oObj = this;
		oObj.mouseover(function(){
			$(this).addClass("over");
		})
		.mouseout(function(){
			$(this).removeClass("over");
		});
	},
    /*菜单选中状态*/
    menuActive:function() {
      var oObj = this;
      oObj.addClass('active').html(oObj.text());
    },
		/*联动*/
		linkage:function() {
			var oObj = this;
			if(oObj.val() == '') {
				oObj.nextAll().remove();
				var firstinput;
			    if(oObj.prev('select').val() == undefined)
                    firstinput = '';
				else
                    firstinput = oObj.prev('select').val();
			    oObj.siblings('input').val(firstinput);
				return;
			}
			$.ajax({
				url : BASEURL+'ajax/linkage',
				type : 'post',
				data : {cateid:oObj.val(),table:oObj.parent().attr('table')},
				dataTye : 'json',
				beforeSend:function(){
			    $('#loadMask').show();
		    },
        complete:function(){
			    $('#loadMask').hide();
			  },
				success : function(json){
					json = eval(json);
					if($(json).size() != 0) {
					var sHtml = '';
					$.each(json, function(i) {
						sHtml += '<option value="'+json[i].id+'">'+json[i].name+'</option>';
          });
					oObj.nextAll().remove().end().after("<select class='linkage' onchange='$(this).linkage()'><option value=''>请选择</option>"+sHtml+"</select>");
					} else {
						oObj.nextAll().remove();
					}
					oObj.siblings('input').val(oObj.val());
				}
			});
		},
		/*表格ajax排序*/
		tablesort:function(selfurl) {
			var oObj = this;
			var sSelfurl;
			if(selfurl.split('/')[3] == undefined)
				sSelfurl = 1;
			else
				sSelfurl = selfurl.split('/')[3];

			oObj.each(function(i){
				$(this).click(function(){
					var oMy =$(this);
					$.ajax({
				    type: "POST",
				    url: BASEURL+"ajax/tablesort",
				    dataType: "json",
				    data: 'table='+$(this).attr('table')+'&sort='+$(this).attr('data')+' '+$(this).attr('sort')+'&page='+sSelfurl,
		            beforeSend:function(){
			          $('#loadMask').show();
		            },
                    complete:function(){
			          $('#loadMask').hide();
					},
				    success:function(json){
							document.cookie = oMy.attr('table')+'sort = '+oMy.attr('data')+' '+oMy.attr('sort')+';path=/';
							var sHtml = '';
							$.each(json, function(i) {
								sHtml += '<tr><td align="center">'+json[i].id+'</td>\n'+
	              '<td>'+json[i].name+'</td>\n'+
                '<td align="left">'+json[i].price+'</td>\n'+
                '<td align="center">'+json[i].profit+'</td>\n'+
                '<td align="center">'+((json[i].profit/json[i].price)*100).toFixed(2)+'%</td>\n'+
 	             	'<td align="center"><img width="16" height="16" border="0" src="'+BASEURL+'/public/images/yes.gif"/></td>\n'+
								'<td align="center">2</td>\n'+
								'<td align="center">0</td>\n'+
								'<td align="center"><a title="查看" target="_blank" href=""><img width="16" height="16" border="0" src="'+BASEURL+'public/images/icon_view.gif"/></a> <a title="编辑" href=""><img width="16" height="16" border="0" src="'+BASEURL+'public/images/icon_edit.gif"/></a> <a title="回收站" onclick="" href="javascript:;"><img width="16" height="16" border="0" src="'+BASEURL+'public/images/icon_trash.gif"/></a></td></tr>';
							});
							oMy.parent().parent().next().empty().append(sHtml);
							if(oMy.attr('sort') == 'desc')
							{
								 if(oMy.children('img').length == 0)
								 {
								   oMy.append('<img src="'+BASEURL+'public/images/sort_desc.gif" />');
								 }
								 else
								 {
									 oMy.children('img').attr('src',BASEURL+'public/images/sort_desc.gif')
								 }
								 oMy.attr('sort','asc')
							}
							else
							{
							   oMy.attr('sort','desc')
							   oMy.children('img').attr('src',BASEURL+'public/images/sort_asc.gif')
							}
						}
			    });
			  });
			})
		}
});
/*----------------------------------------------自定义插件结束---------------------------------------*/