async function Live() {
  try {
    var url =
      "https://newsapi.org/v2/top-headlines?" +
      "country=us&" +
      "apiKey=23e04276d1c7448fb073678f0bf5075d";

    var req = new Request(url);

    fetch(req)
      .then(function (response) {
        return response.json(); // Convert the response to JSON
      })
      .then(function (data) {
        console.log(data); // Check the structure of the response JSON

        const articles = data.articles;

        // Create the news container
        const newsContainer = document.getElementById('right');

        // Loop through the articles and create news items
        articles.forEach(function(article) {
          const { title, source, url, /* urlToImage*/ } = article;

         
		  
		  // Create the news item container
          const newsItem = document.createElement('div');
          newsItem.id = 'news';

		  		  // Create the news item container
		//  const newsimg = document.createElement('img');
		//  newsimg.id = 'newsimg';
		//  newsimg.src = urlToImage;

          // Create the headline element
          const headline = document.createElement('h5');
          headline.id = 'headline';
          headline.innerHTML = title;

          // Create the source element
          const sourceDiv = document.createElement('div');
          sourceDiv.id = 'source';
          sourceDiv.innerHTML = source.name;

          // Create the URL button
          const urlButton = document.createElement('button');
          urlButton.id = 'url';
          urlButton.innerHTML = 'Read More';
          urlButton.addEventListener('click', function() {
            window.open(url, '_blank');
          });

          // Append headline, source, and URL to the news item
          newsItem.appendChild(headline);
          newsItem.appendChild(sourceDiv);
          newsItem.appendChild(urlButton);
		//   newsItem.appendChild(newsimg);

          // Append the news item to the news container
          newsContainer.appendChild(newsItem);
        });

        // Append the news container to the news-container element in the HTML
        const container = document.getElementById('right');
        container.appendChild(newsContainer);
      });
  } catch (error) {
    console.error(error);
  }
}
Live();





























// search function

// async function Search(){
//   try {

    
//     var url =
//       "https://newsapi.org/v2/top-headlines?" +
//       "country=us&" +
//       "apiKey=23e04276d1c7448fb073678f0bf5075d";

//     var req = new Request(url);

//     fetch(req)
//       .then(function (response) {
//         return response.json(); // Convert the response to JSON
//       })
//       .then(function (data) {
//         console.log(data); // Check the structure of the response JSON

//         const articles = data.articles;

//         // Create the news container
//         const newsContainer = document.getElementById('right');

//         // Loop through the articles and create news items
//         articles.forEach(function(article) {
//           const { title, source, url, /* urlToImage*/ } = article;

         
		  
// 		  // Create the news item container
//           const newsItem = document.createElement('div');
//           newsItem.id = 'news';

// 		  		  // Create the news item container
// 		//  const newsimg = document.createElement('img');
// 		//  newsimg.id = 'newsimg';
// 		//  newsimg.src = urlToImage;

//           // Create the headline element
//           const headline = document.createElement('h5');
//           headline.id = 'headline';
//           headline.innerHTML = title;

//           // Create the source element
//           const sourceDiv = document.createElement('div');
//           sourceDiv.id = 'source';
//           sourceDiv.innerHTML = source.name;

//           // Create the URL button
//           const urlButton = document.createElement('button');
//           urlButton.id = 'url';
//           urlButton.innerHTML = 'Read More';
//           urlButton.addEventListener('click', function() {
//             window.open(url, '_blank');
//           });

//           // Append headline, source, and URL to the news item
//           newsItem.appendChild(headline);
//           newsItem.appendChild(sourceDiv);
//           newsItem.appendChild(urlButton);
// 		//   newsItem.appendChild(newsimg);

//           // Append the news item to the news container
//           newsContainer.appendChild(newsItem);
//         });

//         // Append the news container to the news-container element in the HTML
//         const container = document.getElementById('news-container');
//         container.appendChild(newsContainer);
//       });
//   } catch (error) {
//     console.error(error);
//   }
// }

