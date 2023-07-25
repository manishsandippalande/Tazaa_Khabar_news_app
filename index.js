async function Live() {
  try {
    var url =
      "https://newsapi.org/v2/top-headlines?" +
      "country=in&" +
      "apiKey=23e04276d1c7448fb073678f0bf5075d";

    var req = new Request(url);

    fetch(req)
      .then(function (response) {
        return response.json(); // Convert the response to JSON
      })
      .then(function (data) {
        console.log(data); // Check the structure of the response JSON

        const articles = data.articles;

        // Loop through the articles and create news items
          articles.forEach(function (article) {
          const { title, source, url, urlToImage, content } = article;

          // Create the news item container
          const newsItem = document.createElement("div");
          newsItem.id = "news";

          // Create the news img container
          const imgcontainer = document.createElement("div");
          imgcontainer.className = "img-container";
          const newsimg = document.createElement("img");
          newsimg.id = "newsimg";
          newsimg.src = urlToImage;

          // data container
          const datacontainer = document.createElement("div");
          datacontainer.className = "data-container";
          // Create the headline element
          const headline = document.createElement("h5");
          headline.id = "headline";
          headline.innerHTML = title;

          // Create the source element
          const sourceDiv = document.createElement("div");
          sourceDiv.id = "source";
          sourceDiv.innerHTML = source.name;
          // Create the source element
          const description = document.createElement("div");
          description.id = "description";
          description.innerHTML = content;

          // Create the URL button
          const urlButton = document.createElement("button");
          urlButton.id = "url";
          urlButton.innerHTML = "Read More";
          urlButton.addEventListener("click", function () {
            window.open(url, "_blank");
          });

          

          imgcontainer.appendChild(newsimg);
          // Append headline, source, and URL to the news item
          datacontainer.appendChild(headline);
          datacontainer.appendChild(sourceDiv);
          datacontainer.appendChild(description)
          datacontainer.appendChild(urlButton);
          newsItem.appendChild(imgcontainer);
          newsItem.appendChild(datacontainer);

          // Append the news item to the news container
          const container = document.getElementById("news-container");
          container.appendChild(newsItem);
        });
      });
  } catch (error) {
    console.error(error);
  }
}

Live();
