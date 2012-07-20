#START_BLOCK_TRIGGER#
function ShowTab(T) {
	try{
		if(!document.getElementById("div" + T))
		{
			return false;
		}
	}
	catch(e){}
	for(var i=1;i<50;i++){
		try {
			document.getElementById("div" + i).style.display = "none";
			document.getElementById("tab" + i).className = "";
		} catch (e) {
		}
	}

	document.getElementById("div" + T).style.display = "";
	document.getElementById("tab" + T).className = "active";

	if (typeof onShowTab == 'function') {
		onShowTab(T);
	}
}
#END_BLOCK_TRIGGER#
