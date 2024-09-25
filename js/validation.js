

function formValidation() {
    return validateAddress() && validateInterestIncome(); // Ensure both validations pass
}

function validateAddress() {
    var address = document.getElementById("address").value; // Get the value directly without trim
    var addressErrorDiv = document.getElementById("addressErrorDiv");
    addressErrorDiv.innerHTML = ""; // Clear previous error message

    if (address === "") {
        addressErrorDiv.innerHTML = "Address is required.";
        return false;
    }
    return true; // Address is valid
}

function validateInterestIncome() {
    var interestIncome = document.getElementById("interestIncome").value; // Get the value directly without trim
    var errorDiv = document.getElementById("interestIncomeErrorDiv");
    errorDiv.innerHTML = ""; // Clear previous error message

    if (interestIncome === "") {
        return true; // Allow empty input
    } 

    if (isNaN(interestIncome) || parseFloat(interestIncome) < 0) {
        errorDiv.innerHTML = "Interest Income must be a positive number or left empty.";
        return false;
    } 
    return true; // Interest Income is valid
}