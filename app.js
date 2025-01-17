// This function fetches the quote from the server when the button is clicked
document.getElementById("getQuoteButton").addEventListener("click", function() {
    fetch("http://localhost/quote_generator/fetch_quote.php")  // Correct path to PHP file
    .then(response => response.json())
    .then(data => {
        if (data.quote_text) {
            // Display the quote text and author in the HTML
            document.getElementById("quoteText").innerText = `"${data.quote_text}"`;
            document.getElementById("quoteAuthor").innerText = `- ${data.author}`;
        } else {
            document.getElementById("quoteText").innerText = "No quote found.";
        }
    })
    .catch(error => {
        console.error("Error fetching quote:", error);
        document.getElementById("quoteText").innerText = "Error fetching quote.";
    });
});
