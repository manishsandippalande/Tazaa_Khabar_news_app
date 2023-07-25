async function search(searchterm) {
  try {
    var url =
      "https://newsapi.org/v2/everything?" +
      "q="+searchterm+"&" +
      "from=2023-07-16&" +
      "sortBy=popularity&" +
      "apiKey=23e04276d1c7448fb073678f0bf5075d";

    var req = new Request(url);

    fetch(req)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      console.log(data); // Check the structure of the response JSON

      const articles = data.articles;
      console.clear(data)

      // Create the news container
      const newsContainer = document.getElementById('right');

      // Loop through the articles and create news items
      articles.forEach(function(article) {
        const { title, source, url, urlToImage, description } = article;

       
    
    // Create the news item container
        const newsItem = document.createElement('div');
        newsItem.id = 'search-container';










        // Create the poster container
        const postercontainer = document.createElement('div');
        postercontainer.className = 's-poster';
        // Create the poster
        const newsimg = document.createElement('img');
        newsimg.id = 's-poster';
        newsimg.src = urlToImage;
        newsimg.alt="Poster ThumbNail"




        // right container
        const rightcontainer= document.createElement('div')
        rightcontainer.className='s-right'
        // Create the headline element
        const headline = document.createElement('div');
        headline.id = 's-headline';
        headline.innerHTML = title;
        // Create the source element
        const author = document.createElement('div');
        author.id = 's-source';
        author.innerHTML = source.name;
        // Create the description element
        const sdescription = document.createElement('div');
        sdescription.id = 's-description';
        sdescription.innerHTML = description;
        // Create btn container
        const btncontainer = document.createElement('div');
        btncontainer.className = 's-url';
        // Create the URL button
        const urlButton = document.createElement('button');
        urlButton.id = 's-url';
        urlButton.innerHTML = 'Read More';
        urlButton.addEventListener('click', function() {
          window.open(url, '_blank');
        });


        

       

        // append poster in poster container
        postercontainer.appendChild(newsimg);

        // Append headline, source, and URL to the news item
        rightcontainer.appendChild(headline);
        rightcontainer.appendChild(author);
        rightcontainer.appendChild(sdescription);
        rightcontainer.appendChild(btncontainer);

        // append btn in btn container
        btncontainer.appendChild(urlButton);

         // append poster container and right container in search container
         newsItem.appendChild(postercontainer);
         newsItem.appendChild(rightcontainer);

        // append search container in search content
        const scontent = document.getElementById('search-content')
        scontent.appendChild(newsItem)
        
      });

    });

  } catch (error) {
    console.error(error);
  }
}


var button = document.getElementById("searchbtn");

// Add a click event listener to the button
button.addEventListener("click", function () {
  searchterm = document.getElementById("search").value;
  document.getElementById("search-content").style.display="flex"
  search(searchterm)
});
