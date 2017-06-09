var selections = Object();
selections['DISEASE'] = ['SELECT SUBJECT', 'ENDOCRINOLOGY']
selections['LOCATION'] = ['SELECT STATE', 'Al', 'AK', 'AZ', 'AR'];

var states = Object();
states['AL'] = ['Abbeville', 'Adamsville', 'Addison', 'Akron', 'Alabaster'];
states['AK'] = [];
states['AZ'] = [];
states['AR'] = [];

function setSelect(){
	var sel;
	for(sel in selections){
		document.write('<option value = "' + sel + '">' + sel + '</option>')
	}
}

function set_Choice(choiceSel, resultSel){
	var ChoiceArr;
	resultSel.length = 0;
	var choice = choiceSel.options[choiceSel.selectedIndex].text;
	if(selections[choice]){
		resultSel.disabled = false;
		ChoiceArr = selections[choice];
		for(var i = 0; i<ChoiceArr.length; i++){
			resultSel.options[i] = new Option[ChoiceArr[i]];
		}
	}

}
function setStates()
{
	for (region in states)
		document.write('<option value="' + region + '">' + region + '</option>');
}

function set_city(stateSel, citySel){
	var cityArr;
	citySel.length = 0;
	var region = stateSel.options[stateSel.selectedIndex].text;
	if(states[region]){
		citySel.disabled = false;
		citySel.options[0] = new Option('SELECT CITY', '');
		cityArr = states[region];
		for(var i = 0; i < cityArr.length; i++){
			citySel.options[i+1] = new Option(cityArr[i]);

		}
	}
}