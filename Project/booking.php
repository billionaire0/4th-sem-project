<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Form</title>
    <link rel="stylesheet" href="css/book.css" />
  </head>
  <body>
    <h1>Booking Form</h1>
    <form id="bookingForm"action="bookingController.php" method="POST" name="Form" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input
        type="text"
        id="name"
        name="name"
        required
        pattern="[A-Za-z]+"
        placeholder="Your Full Name"
      /><br /><br />

      <label for="address">Address:</label>
      <input
        type="text"
        id="address"
        name="address"
        required
        pattern="[A-Za-z0-9\s]+"
        placeholder="Municipality-wardno.,district"
      /><br /><br />

      <label for="contact">Contact Number:</label>
      <input
        type="tel"
        id="contact"
        name="contact"
        required
        pattern="[0-9]{10}"
        placeholder="9000000000"
      /><br /><br />

      <label for="service" >Service:</label>
      <select name="service">
        <option>select</option>
        <option>Green Cleaning</option>
        <option>Residential Cleaning</option>
        <option>Outdoor Cleaning</option>
        <option>Special Task</option>
      </select>
      <br /><br />

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required /><br /><br />

      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required /><br /><br />

      <input type="submit" value="Submit" />
    </form>

    <script>
  function validateForm() {
    var name = document.getElementById("name").value;
    var address = document.getElementById("address").value;
    var contact = document.getElementById("contact").value;
    var date = document.getElementById("date").value;
    var currentDate = new Date(); // Get today's date

    var namePattern = /^[A-Za-z]+$/;
    var addressPattern = /^[A-Za-z0-9\s]+$/;
    var contactPattern = /^[0-9]{10}$/;

    if (!name.match(namePattern)) {
      alert("Name should contain only alphabets.");
      return false;
    }

    if (!address.match(addressPattern)) {
      alert("Address should be alphanumeric.");
      return false;
    }

    if (!contact.match(contactPattern)) {
      alert("Contact number should be 10 digits.");
      return false;
    }

    var selectedDate = new Date(date);
    
    if (selectedDate < currentDate) {
      alert("Please choose a date that is today or in the future.");
      return false;
    }

    alert("Your request is submitted. We will contact you immediately after checking the schedule for confirmation.");
    return true;
  }
</script>

  </body>
</html>
