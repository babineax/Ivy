let userreg = document.getElementById("usererreg");

userreg.addEventListener("submit", (e) => {
  e.preventDefault();

  let First_name = document.getElementById("First_name");
  let Last_name = document.getElementById("Last_name");
  let Age = document.getElementById("Age");
  let Sex = document.getElementById("Sex");
  let Id = document.getElementById("Id");
  let Phone_number = document.getElementById("Phone_number");
  let Address = document.getElementById("Address");
  let County = document.getElementById("County");
  let Email = document.getElementById("Email");
  let Password = document.getElementById("Password");
  let Ivy_User = document.getElementById("Ivy_User");


  if (First_name.value == "" || Last_name.value == ""||
   Age.value == ""|| Sex.value == ""|| Id.value == ""|| 
   Phone_number.value == ""|| Address.value == ""|| 
   County.value == ""|| Email.value == ""|| Password.value == ""|| Ivy_User.value == "") {
    alert("Ensure you input a value in all fields!");
  } else {
    // perform operation with form input
    alert("This form has been successfully submitted!");
    console.log(
      `Welcome to Ivy ${First_name.value}  ${Last_name.value}`
    );

    First_name.value = "";
    Last_name.value = "";
  }
});