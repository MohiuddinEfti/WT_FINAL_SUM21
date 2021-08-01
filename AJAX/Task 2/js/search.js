function get(id)
{
	return docoment.getElementById(id);
}
function search(e)
{
	if(e.value =="")
	{
		get("suggestions").innerHTML="";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","ProductSearch.php?key="+e.value,true);
	xhr.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.statuss == 200)
		{
			get("suggestions").innerHTML = this.responseText;
		}
	};
	xhr.send();
}