$(document).ready(function () {

    function clearUrl(string) {
        let urlParts = window.location.href.split("/");
        if (urlParts.length <= 4) {
            urlParts.push("Gost");
        }
        else {
            while (urlParts.length >= 5) {
                urlParts.pop();
            }
        }
        urlParts.push(string);
        return urlParts.join("/");
    }

    $("#porukaMajstor").on("click", function () {
        let urlParts = window.location.href.split("/");
        let IdTo = urlParts[urlParts.length - 1];
        let newUrl = clearUrl("getAuthorSession");
        // AJAX req
        $.ajax({
            url: newUrl,
            method: 'POST',
            success: function (response) {
                let jsonResponse = JSON.parse(response);
                let author = jsonResponse;
                let IdFrom = author.IdKor;

                let urlPartsa = newUrl.split("/");
                urlPartsa.pop(); // pop method
                urlPartsa.pop(); // pop controller
                urlPartsa.push("Chat"); // push controller
                urlPartsa.push("showChatting?IdFrom=" + IdFrom + "&IdTo=" + IdTo); // push method with parameters
                newUrl = urlPartsa.join('/'); // create url
                // go to new page
                window.location.href = newUrl;
            },
            error: function (error) {
                return null;
            }
        });
    });
});