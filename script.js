// Wait until the DOM is fully loaded before executing the script
document.addEventListener("DOMContentLoaded", function() {
    // Add an event listener to the button
    const button = document.getElementById("alertButton");

    button.addEventListener("click", function() {
        alert("Hello! You've clicked the button.");
    });
});
