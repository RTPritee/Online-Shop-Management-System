/*
 function validation(){
	var a = document.getElementByID("email");
	var b = document.getElementByID("pass");
	if (a.value=="" || b.value=="")
	{
		alert ('Correctly fillup all');
		return false;
	}
	else 
		return;
 }
 */

const form=document.getElementById("log");
const email=document.getElementById("email");
const pass=document.getElementById("pass");


form.addEventListener("submit",(e)=>{
	e.preventDefault();
	validate();
	
});

function validate(){
		var email=email.value;
		var password=pass.value;
	if(email === "" || pass === ""){

		if(email == '')
		{
			setError(email,'email is blank');
			
		}
		if(password == '')
		{
			setError1(pass,'Password is blank');
		}
		
	}
	else{
		setSuccess(pass);
		setSuccess(email);
	}
	
}

function setError(input,msg)
{
	
	const form=document.getElementById("log");		
}

function setError1(input,msg)
{
	
	const form=document.getElementById("log");

}

function setSuccess(input)
{
	const form=input.parent;
	
	form.className='login success';
	
}
