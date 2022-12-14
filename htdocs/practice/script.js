function validateForm() {
    let result = true;

    let name = document.getElementById("name").value;
    let roll = document.getElementById("roll").value;
    let email = document.getElementById("email").value;
    let age = document.getElementById("age").value;
    let course = document.querySelector("#course").value;
    let gender;
    let n = document.getElementsByName("gender");
    for (let i = 0; i < n.length; i++) {
        if (n[i].checked) gender = n[i].value;
    }
    let society = [];
    let m = document.getElementsByName("society");
    for (let i = 0; i < m.length; i++) {
        if (m[i].checked) society.push(m[i].value);
    }
    let address = document.getElementById("address").value;
    let photo = document.getElementById("photo").value;

    console.log("Name : ", name);
    console.log("Roll : ", roll);
    console.log("Email : ", email);
    console.log("Age : ", age);
    console.log("Gender : ", gender);
    console.log("Society :", society);
    console.log("Course : ", course);
    console.log("Address : ", address);
    console.log("Photo : ", photo);
    //name
    if (name == "") {
        document.getElementById("errname").innerHTML = "Name cannot be blank";
        result = false;
    } else document.getElementById("errname").innerHTML = "";
    //roll
    const rex_roll = /\d\d[a-z A-Z]{3}\d\d\d\d/;
    if (roll == "") {
        document.getElementById("errroll").innerHTML =
            "Roll Number Cannot be blank";
        result = false;
    } else if (!rex_roll.test(roll)) {
        document.getElementById("errroll").innerHTML =
            "Wrong format of roll number";
        result = false;
    } else document.getElementById("errroll").innerHTML = "";
    //email
    const rex_mail = /[a-zA-Z0-9.,_\-]+@[a-zA-Z]+[.][a-z]{2,3}/;
    if (email == "") {
        document.getElementById("erremail").innerHTML = "Email cannot be blank";
        result = false;
    } else if (!rex_mail.test(email)) {
        document.getElementById("erremail").innerHTML = "Incorrect email";
        result = false;
    } else document.getElementById("erremail").innerHTML = "";
    //age
    if (age == "") {
        document.getElementById("errage").innerHTML = "Age cannot be blank";
        result = false;
    } else if (age < 16 || age > 22) {
        document.getElementById("errage").innerHTML =
            "Age out of range (16-22)";
        result = false;
    } else document.getElementById("errage").innerHTML = "";
    //address
    if (address == "" || address == " ") {
        document.getElementById("erraddress").innerHTML =
            "Address cannot be blank";
        result = false;
    } else document.getElementById("erraddress").innerHTML = "";

    return result;
}
