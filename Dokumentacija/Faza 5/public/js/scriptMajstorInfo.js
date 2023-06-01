$(document).ready(function () {
    $("#porukaMajstor").on("click", function () {
        // get sender id from server (session)
        let urlParts = window.location.href.split("/");
        let IdTo = urlParts[urlParts.length - 1];
        for (let i = 0; i < 8; i++) {
            urlParts.pop();
        }
        urlParts.push("getAuthorSession"); // push method
        let newUrl = urlParts.join("/"); // create url

        // AJAX req
        $.ajax({
            url: newUrl,
            method: 'POST',
            success: function (response) {
                let jsonResponse = JSON.parse(response);
                let author = jsonResponse;
                let IdFrom = author.IdKor;

                urlParts.pop(); // pop method
                urlParts.pop(); // pop controller
                urlParts.push("Chat"); // push controller
                urlParts.push("showChatting?IdFrom=" + IdFrom + "&IdTo=" + IdTo); // push method with parameters
                newUrl = urlParts.join('/'); // create url
                // go to new page
                window.location.href = newUrl;
            },
            error: function (error) {
                return null;
            }
        });
    });
});