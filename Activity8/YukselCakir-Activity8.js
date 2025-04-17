var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick = displayScores;
    $("add").onclick = addScore;
    $("name").focus(); 
};

function displayResults() {
    var total = 0;
    var highest = scores[0];
    var highestIndex = 0;

    for (var i = 0; i < scores.length; i++) {
        total += scores[i];
        if (scores[i] > highest) {
            highest = scores[i];
            highestIndex = i;
        }
    }

    var average = (total / scores.length).toFixed(2);
    var resultsDiv = $("results");
    resultsDiv.innerHTML = "<h2>Results</h2>";
    resultsDiv.innerHTML += "<p>Average score is " + average + "</p>";
    resultsDiv.innerHTML += "<p>High score = " + names[highestIndex] + " with a score of " + highest + "</p>";
}


function displayScores() {
    var table = $("scores_table");

   
    table.innerHTML = "<tr><th>Name</th><th>Score</th></tr>";

    for (var i = 0; i < names.length; i++) {
        var row = "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
        table.innerHTML += row;
    }
}

function addScore() {
    var name = $("name").value.trim();
    var score = parseInt($("score").value);

    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
    } else {
        names.push(name);
        scores.push(score);

        $("name").value = "";
        $("score").value = "";
        $("name").focus();
    }
}
