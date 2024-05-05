// Array of movie titles
const movies = [
    "The Shawshank Redemption",
    "The Godfather",
    "The Dark Knight",
    "Pulp Fiction",
    "Inception",
    "Forrest Gump",
    "Fight Club",
    "The Lord of the Rings: The Return of the King",
    "The Matrix",
    "Interstellar"
];

// Function to create movie voting elements
function createMovieElement(movie) {
    const movieElement = $("<div>").addClass("movie-item");
    const movieTitle = $("<h3>").text(movie);
    const yesButton = $("<a>").addClass("ui-btn ui-btn-inline").text("Yes");
    const noButton = $("<a>").addClass("ui-btn ui-btn-inline").text("No");

    movieElement.append(movieTitle, yesButton, noButton);
    return movieElement;
}

// Function to add movie voting elements to the page
function addMovieElements() {
    const movieList = $("#movie-list");
    movies.forEach(movie => {
        const movieElement = createMovieElement(movie);
        movieList.append(movieElement);
    });
}

// Function to handle vote clicks
function handleVoteClick() {
    const movie = $(this).siblings("h3").text();
    const vote = $(this).text().toLowerCase();
    const voteTableBody = $(`#${vote}-table tbody`);
    const tableRow = $("<tr>").append($("<td>").text(movie));

    voteTableBody.append(tableRow);
    $(this).parent().remove();

    // Check if all movies are voted
    if ($("#movie-list").children().length === 0) {
        $("#reset-button").show(); // Show the reset button
    }
}

// Function to reset the voting process
function resetVoting() {
    // Clear the tables
    $("#yes-table tbody").empty();
    $("#no-table tbody").empty();
    // Re-add movie elements
    addMovieElements();
    // Hide the reset button
    $("#reset-button").hide();
}

// Function to initialize the app
function initApp() {
    addMovieElements();
    $("#movie-list").on("click", "a", handleVoteClick);

    // Add event listener for reset button
    $("#reset-button").on("click", resetVoting);
}

// Initialize the app when the page is ready
$(document).ready(function() {
    initApp();

    // Initially hide the reset button
    $("#reset-button").hide();
});
