var internal_CurrentIdPrest='';
var internal_PrestationURL='';

function __mysearch(input) {
	var regexp = /^.*[&|?]idprest=([a-zA-Z0-9]*)/
	var res = regexp.exec(input);
	if (res) return res[1];
	regexp = /^.*[&|?]chl_200_id_prestation=([a-zA-Z0-9]*)/
	res = regexp.exec(input);
	if (res) return res[1];
	return '';
}

function getCurrentIdPrest(){
	if (internal_CurrentIdPrest!='')
	    return internal_CurrentIdPrest;
	else {
		var res = ""
		if (document.location.search) {
			res = __mysearch(document.location.search);
		}
		if (res=="") {
			if (document.referrer)
				res = __mysearch(document.referrer);
		}
		return res;
	}
}
function setCurrentIdPrest(input) {
    internal_CurrentIdPrest=input;
}
function getPrestationURL(){
    return internal_PrestationURL;
}
function setPrestationURL(input){
    internal_PrestationURL = input;
}
