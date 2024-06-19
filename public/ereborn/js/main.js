window.templateFlags = new Array();

$(function(){
	$('.richText').trumbowyg({
		btns: [
			['viewHTML'],
			['undo', 'redo'], // Only supported in Blink browsers
			['formatting'],
			['strong', 'em'],
			['link'],
			['insertImage'],
			['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
			['unorderedList', 'orderedList'],
			['horizontalRule'],
			['removeformat'],
			['fullscreen'],
			['upload']
		],
		plugins: {
			upload: {
				serverPath:"upload.php",
				fileFieldName:"file",
				urlPropertyName:"file",
				statusPropertyName:"success",
			},
			allowTagsFromPaste: {
				allowedTags: ['h1', 'h2', 'h3', 'h4', 'h5', 'p', 'br', 'b', 'i', 'div', 'blockquote', 'strong', 'em', 'a', 'img', 'ul', 'ol', 'li', 'hr', 'span', 'iframe']
			}
		}
	});

	$( document ).ready(function() {
		$(".tabs-section .tab:first-child .tabs-title").addClass("active");
		$(".tabs-section .tab:first-child .fieldRow").addClass("active");
		$("#delete").on("click", function () {
			let conf = window.confirm("Are you sure want to delete?");
			if(conf){
				$(".deleteButton").click();
			}
        });
	});

	$(".tabs-title").click(function(){
		$(".fieldRow").removeClass("active");
		$(".tabs-title").removeClass("active");
		$(this).next(".fieldRow").addClass("active");
		$(this).addClass("active");
	});


	
	$(".langSwitch input").click(function(){
		$(this).parent().parent().parent().parent().find(".inputTd").children().hide().eq( $(this).parent().index() ).show();
	});

	$(".burger").click(function() {
		$(".tm-left-column").addClass("active");
	});

	$(".tm-left-column-close").click(function() {
		$(".tm-left-column").removeClass("active");
	});
	
	if($(window).width() > 768) {
		$("#gallery").tableDnD({onDragClass:"dragClassGallery", onDrop:function(tb, tr){}});
	}

	if($(window).width() <= 768) {
		$("table td").each(function(index) {
			const thisTable = $(this).closest("table");
			const thisDataTitle = thisTable.find("th").eq($(this).index()).text();

			console.log($(this).index());
			if(thisDataTitle) {
				$(this).attr("data-title", thisDataTitle);
			}
		});
	}
	
	if(inIframe())
	{
		$(".pickColumn").show();
		
		var pickBoxList = $(".pickBox");
		
		for(var i=0; i<pickBoxList.length; i++)
		{
			var pickBox = pickBoxList.eq(i);
			
			if( innerIsChecked(pickBox) )
			{
				pickBox.attr("checked", true);
			}
		}
	}
	else
	{
		if($(window).width() > 768) {
			$("#report").tableDnD({onDragClass:"dragClassEntities", onDrop:function(tb, tr){
				document.orderForm.submit();
			}});
		}
	}
	
	if($(window).width() > 768) {
		$(".pickedData").tableDnD({onDragClass:"dragClassEntities", onDrop:function(tb, tr){
			document.orderForm.submit();
		}});
	}
});

function chooseTemplate(sectionLink, templateId)
{
	window.location.assign(sectionLink + "&tpl=" + templateId);
}

function pick(pickerUrl, fieldName)
{
	window.pickFieldName = fieldName;
	
	$.fancybox.open({
		src  : pickerUrl,
		type : 'iframe'
	});
}

function innerPick(pickBox)
{
	var entityId = $(pickBox).parent().parent().attr("id");
	
	if( innerIsChecked(pickBox) )
	{
		window.parent.outerRemoveRow(entityId);
	}
	else
	{
		var titleCell = $(pickBox).parent().parent().find(".titleColumn");
		if(titleCell.length > 0)
		{
			var entityTitle = titleCell.html();
		}
		else
		{
			var entityTitle = $(pickBox).parent().parent().find(".typeColumn").html();
		}
		var entityImage = $(pickBox).parent().parent().find(".imageColumn").css("background-image");
		
		window.parent.outerPick(entityId, entityTitle, entityImage);
	}
}

function outerPick(entityId, entityTitle, entityImage)
{
	if( window.pickFieldName.substring(0, 3) == "eo_" )
	{
		var txt = "";
		
		txt += "<tr class='pickRow_"+ entityId +"'>";
			if( window.pickFieldName in window.templateFlags )
			{
				for(var flagIter = 0; flagIter < window.templateFlags[window.pickFieldName].length; flagIter++)
				{
					var aFlag = window.templateFlags[window.pickFieldName][flagIter];
					
					txt +="<td>";
					
					if(aFlag.type=="number")
					{
						txt += "<input type='number' class='flagInput' name='"+ window.pickFieldName +"_"+ aFlag["name"] +"[]' placeholder='"+ aFlag["placeholder"] +"'>";
					}
					else if(aFlag.type=="text")
					{
						txt += "<input type='text' class='flagInput' name='"+ window.pickFieldName +"_"+ aFlag["name"] +"[]' placeholder='"+ aFlag["placeholder"] +"'>";
					}
					else if(aFlag.type=="select")
					{
						txt += "<select class='flagSelect' name='"+ window.pickFieldName +"_"+ aFlag["name"] +"[]'>";
							txt +=  "<option value=''>"+ aFlag["placeholder"] +"</option>";
							for(optionKey in aFlag["options"])
							{
								var optionValue = aFlag["options"][optionKey];
								
								txt +=  "<option value='"+ optionKey +"'>"+ optionValue +"</option>";
							}
						txt +=  "</select>";
					}
					
					txt +="</td>";
				}
			}
			else
			{
				txt +="<td><div class='file-img-container align-center'><div class='file-img-title' style='min-width: 60px;text-align: center;'><img src='img/picture.png' alt=''></div><div class='imageColumn file-img'><div>&nbsp;</div></div></div></td>";
			}
			txt +="<td><div class='pickedTitle'>"+ entityTitle +"</div></td>";
			txt +="<td><div class='pickedDelete'><input type='hidden' name='"+ window.pickFieldName +"[]' value='"+ entityId +"'><span class='deliteSection' onclick='removePickedRow(this)'></span></div></td>";
			txt +="<td><div class='moving'></div></td>";
		txt +="</tr>";
		
		$("#"+window.pickFieldName).children("tbody").prepend(txt);
		
		if(entityImage)
		{
			$("#"+window.pickFieldName).find(".pickRow_" + entityId).find(".imageColumn").css("background-image", entityImage);
		}
	}
	else
	{
		$("input[name='"+ window.pickFieldName +"']").val(entityId);
		
		$("#"+window.pickFieldName).html(entityTitle);
		
		$.fancybox.close();
	}
}

function innerIsChecked(pickBox)
{
	var entityId = $(pickBox).parent().parent().attr("id");
	
	return window.parent.outerIsChecked(entityId);
}

function outerIsChecked(entityId)
{
	if( window.pickFieldName.substring(0, 3) == "eo_" )
	{
		if( $("#"+window.pickFieldName).find("input[value='"+ entityId +"']").length > 0 )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		if( $("input[name='"+ window.pickFieldName +"']").val() == entityId )
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

function outerRemoveRow(entityId)
{
	if( window.pickFieldName.substring(0, 3) == "eo_" )
	{
		$("#"+window.pickFieldName).find(".pickRow_" + entityId).remove();
	}
	else
	{
		$("input[name='"+ window.pickFieldName +"']").val("");
		
		$("#"+window.pickFieldName).html("");
	}
}

function removePickedRow(delButton)
{
	$(delButton).parent().parent().parent().remove();
}

function inIframe()
{
	if(window.parent.location.href.indexOf("?editSection&") === -1 && window.parent.location.href.indexOf("?addSection&") === -1 && window.parent.location.href.indexOf("?editWidget&") === -1 && window.parent.location.href.indexOf("?addWidget&") === -1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function toggleAll(me)
{
	if(me.checked == true)
	{
		$('td.pickColumn input:not(:checked)').click();
	}
	else
	{
		$('td.pickColumn input:checked').click();
	}
}