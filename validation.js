function validateForm()
{
	var password=document.forms["form1"]["password"].value;
	var cpassword=document.forms["form1"]["cpassword"].value;
	var passlen = password.length;

	if (password==null || password=="")
  	{
  		alert("You have to fill in a password!");
  		return false;
  	}
  	else if(password !=null)
  	{
  		if(password != cpassword){
  			alert("Your passwords don't match!");
  			return false;
  		}
  		if(passlen < 6){
  			alert("You must fill in at least 6 characters for your password");
  			return false;
  		}
  	}

}

function validateForm1()
{
  var password=document.forms["formfaculty"]["password"].value;
  var cpassword=document.forms["formfaculty"]["cpassword"].value;
  var start=document.forms["formfaculty"]["start"].value;
  var end=document.forms["formfaculty"]["end"].value;
  var d = new Date();
  var n = d.getFullYear();
  var passlen = password.length;

  if (password==null || password=="")
    {
      alert("You have to fill in a password!");
      return false;
    }
    else if(password !=null)
    {
      if(password != cpassword){
        alert("Your passwords don't match!");
        return false;
      }
      if(passlen < 6){
        alert("You must fill in at least 6 characters for your password");
        return false;
      }
    }

  if(start < n)
    {
      alert("You cannot create a subject that is past this year!");
      return false;
    }

    if(start >= end){
      alert("You cannot place a starting year that is higher or equal than the end!");
      return false;
    }

}

function validateForm2()
{
  var password=document.forms["formadmin"]["password"].value;
  var cpassword=document.forms["formadmin"]["cpassword"].value;
  var passlen = password.length;

  if (password==null || password=="")
    {
      alert("You have to fill in a password!");
      return false;
    }
    else if(password !=null)
    {
      if(password != cpassword){
        alert("Your passwords don't match!");
        return false;
      }
      if(passlen < 6){
        alert("You must fill in at least 6 characters for your password");
        return false;
      }
    }
}

function validateForm2()
{
  var overall=document.forms["formcompute"]["overall"].value;
  var total=document.getElementById("total");

  if (total >= 100)
    {
      alert("You cannot add more than 100% on the computation!");
      return false;
    }

  var t = overall + total;
  if(t >= 100){
      alert("You cannot add more than 100% on the computation!");
      return false;
  }
}

function validateYear(){
    var start=document.forms["formfaculty"]["start"].value;
    var end=document.forms["formfaculty"]["end"].value;
    var d = new Date();
    var n = d.getFullYear();
    if(start < n)
    {
      alert("You cannot create a subject that is past this year!");
      return false;
    }

    if(start >= end){
      alert("You cannot place a starting year that is higher or equal than the end!");
      return false;
    }
}