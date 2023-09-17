function validateName()
{
	const name = document.getElementById("imie");
	const pattern = /^[a-zA-ZĄąĆćĘęŁłŃńÓóŚśŹźŻż]{2,50}$/;

	if (!pattern.test(name.value))
	{
		imie_label = document.getElementById("imie_label");
		formularz = document.getElementById("formularz");
		
		const para_blank = document.createElement("p");
		const para_error = document.createElement("p");
		
		para_error.innerHTML = "Imię musi zawierać od 2 do 50 znaków alfabetu.";

		formularz.insertBefore(para_error, imie_label);
		formularz.insertBefore(para_blank, para_error);
	}
}

function clearName()
{
	const para_blank = document.getElementById("imie_blank");
	const para_error = document.getElementById("imie_error");
	console.log(para_blank);

	if (para_blank)
	{
		para_blank.remove();
		para_error.remove();
	}
	
}