const addStudent = () => {
  const btn = document.querySelector("#addStudent");
  const container = document.createElement("form");
  container.action = "addStudent.php";

  // Insert the form before the button
  btn.before(container);

  // Create and append the input fields
  const nameInput = document.createElement("input");
  nameInput.type = "text";
  nameInput.name = "fullName";
  nameInput.placeholder = "Enter full name";
  container.appendChild(nameInput);

  const emailInput = document.createElement("input");
  emailInput.type = "text";
  emailInput.name = "email";
  emailInput.placeholder = "Enter email";
  container.appendChild(emailInput);

  // Create and append the confirm button
  const confirmBtn = document.createElement("button");
  confirmBtn.type = "submit";
  confirmBtn.textContent = "+";

  // Add an event listener to remove the form after submission
  confirmBtn.addEventListener("click", (event) => {
    event.preventDefault();
    container.remove();
  });

  container.appendChild(confirmBtn);
};

const addUniversity = () => {
  const btn = document.querySelector("#addUniversity");
  const container = document.createElement("form");
  container.action = "addUniversity.php";

  // Insert the form before the button
  btn.before(container);

  // Create and append the input fields
  const nameInput = document.createElement("input");
  nameInput.type = "text";
  nameInput.name = "uniName";
  nameInput.placeholder = "Enter university name";
  container.appendChild(nameInput);

  const locationInput = document.createElement("input");
  locationInput.type = "text";
  locationInput.name = "uniLocation";
  locationInput.placeholder = "Enter university location";
  container.appendChild(locationInput);

  // Create and append the confirm button
  const confirmBtn = document.createElement("button");
  confirmBtn.type = "submit";
  confirmBtn.textContent = "+";

  // Add an event listener to remove the form after submission
  confirmBtn.addEventListener("click", (event) => {
    event.preventDefault();
    container.remove();
  });

  container.appendChild(confirmBtn);
};

const showAddLinkForm = () => {
  const link = document.querySelector("#addLinkForm");
  link.style.display = "block";
};
