
function postService(data) {

    var html = {
        heading: data.title,
        paragraph: data.body,
    };

    container.innerHTML = displayHtml(html);
}

function displayHtml(html) {
    return `<div class="card">
    <h1>${html.heading}</h1>
    <p>${html.paragraph}</p>
    </div>
    `
}