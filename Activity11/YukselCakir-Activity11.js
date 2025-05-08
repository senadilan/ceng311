$(document).ready(function () {
    $("#nav_list a").click(function (event) {
        event.preventDefault();
        let fileName = $(this).attr("title") + ".json";
        $.ajax({
            url: "json_files/" + fileName,
            type: "GET",
            dataType: "json",
            success: function (data) {
                let speaker = data.speakers[0];
                $("main").empty();
                let content = `
                    <h1>${speaker.title}</h1>
                    <img src="${speaker.image}" alt="${speaker.speaker}">
                    <h2>${speaker.month}<br>${speaker.speaker}</h2>
                    <p>${speaker.text}</p>
                `;
                $("main").html(content);
            },
            error: function () {
                alert("data error: " + fileName);
            }
        });
    });
}); //end
