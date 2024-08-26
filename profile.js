document.addEventListener("DOMContentLoaded", function () {
  // Add event listener to the form
  var profileForm = document.querySelector("form");
  profileForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Get values from the form
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Update profile information in the card
    updateProfile(firstName, lastName, email);

    // You can send the data to the server for further processing (e.g., update in the database)
    // Here, you can log the values to the console as an example
    console.log("Submitted Values:", {
      firstName,
      lastName,
      email,
      password, // Note: It's not secure to log passwords, this is just an example
    });
  });
});

function updateProfile(firstName, lastName, email) {
  // Update the content in the card
  var nameElement = document.querySelector(".simple h1");
  var emailElement = document.querySelector(".simple p:nth-child(5)");

  nameElement.textContent = `${firstName} ${lastName}`;
  emailElement.textContent = `${email}`;
}
