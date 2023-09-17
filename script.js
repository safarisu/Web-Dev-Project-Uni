let currentResult = "";

function appendNumber(number) {
	currentResult += number;
	document.getElementById("result").value = currentResult;
}

function appendOperator(operator) {
	currentResult += " " + operator + " ";
	document.getElementById("result").value = currentResult;
}

function clearResult() {
	currentResult = "";
	document.getElementById("result").value = "";
}

function changeResult() {
	currentResult = document.getElementById("result").value;
}

function calculateResult() {
	try {
		let result = eval(currentResult);
		document.getElementById("result").value = result;
		currentResult = result.toString();
	} catch (error) {
		alert("Niepoprawny format!");
		clearResult();
	}
}