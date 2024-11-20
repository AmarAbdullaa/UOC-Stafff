<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hockey</title>
    <style>
@charset "utf-8";

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color:  #f1f1f1;
}


.logo img {
    max-height:70px;
	widows: auto;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 30px;
	justify-content: flex-start;
	padding: 0;
	margin: 0;
}

nav{
	flex-grow: 1;
}

nav a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    padding: 5px 10px;
}

nav a.active {
  color:white;
  font-weight: bold;

}

.bell-icon, .profile-icon {
    cursor: pointer;
    justify-content: flex-end;

    
}

.bell-icon {
    background-color: transparent;
    border: none;
    font-size: 30px;
    color: #7f7f7f;
}
.bell-icon :hover{
    color: white;
}
.profile-icon img {
    height: 35px;
    border-radius: 50%;
    transition: border 0.3s ease;
}

.profile-icon img:hover {
    border: 2px solid #A87BBE;
}
.bottom-nav {
    background-color: #444;
    padding:10px 0;

	position: fixed;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;

}

.bottom-nav nav ul {
    list-style-type: none;
    display: flex;
    gap: 20px;
	width: 100%;
	margin-right: 50px;
	justify-content: flex-end;
	
}
.bottom-nav .sport {
    margin-left: 20px; 
    color: white;
    font-size: 18px;
	font-weight: bold;
	font-style: italic;
	justify-content: flex-start;
}
.bottom-nav nav ul li {
    display: inline-block;
}
.bottom-nav nav ul li a {
    text-decoration: none;
    color: white;
    padding: 8px;
    transition: background-color 0.3s;
	justify-content: flex-end;
}

.bottom-nav nav ul li a:hover {
    background-color: #666;
    border-radius: 5px;
}



/* Dropdown Styling */
.dropdown-menu {
    position: absolute;
    top: 60px;
    right: 30px;
    background-color: white;
    border-radius: 8px;
    border: 1px solid black;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: none;
    width: 200px;
    z-index: 1001;
}

.dropdown-menu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.dropdown-menu ul li {
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
}

.dropdown-menu ul li a {
    text-decoration: none;
    color: black;
}

.dropdown-menu ul li:hover {
    background-color: #F0F0F0;
}

.dropdown-menu.active {
    display: block;
}

.content-container {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 150px 30px;
	background-color: white;
}

.main-content {
    width: 65%;
	margin-bottom: 20px;
}

.main-content img {
    width: 100%;
    height: auto;
    border-radius: 8px;
	display: block;
}

.main-content .category {
    color: #A62639;
    font-size: 14px;
    margin-top: 10px;
    font-weight: bold;
}

.main-content h1 {
    font-size: 28px;
    margin: 10px 0;
    color: #333;
}

.latest-news {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 30px;
    background-color: #F9F9F9;
    width: 30%;
    border-left: 1px solid #ddd;
    border-radius: 8px;
}

.latest-news h2 {
    font-size: 24px;
    color: #66139E;
    margin-bottom: 20px;
}

.latest-news .date {
    font-size: 12px;
    color: #888;
	margin-left: 5px;
    margin-bottom: 5px;
	align-content: flex-start;
}

.latest-news p {
    margin-left:5px;
    font-size: 16px;
    color: #333;
}


.tile {
    position: relative;
    padding: 10px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 5px;
    transition: transform 0.2s ease;
    cursor: pointer;
}

.tile:hover {
    transform: scale(1.02);
}
.tile p {
  font-size: 16px;
  font-weight: bold;
  color: #333333;
}

.tile button {
    background-color: #f1f1f1;
    border: none;
    color: #333;
    cursor: pointer;
    margin: 5px 0;
    font-size: 14px;
}

.tile button:hover {
    color: #66139E;
}


.latest-news h2 {
    text-align: left;
    margin: 10px;
    color: #333333;
}

.news-form {
    margin-bottom: 20px;
}

.news-form input,
.news-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.news-form button {
    background-color: rgba(62, 3, 74, 0.9);
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
}

#newsContainer .news-item {
    border-bottom: 1px solid #eee;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
}

.news-item h3 {
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
}

.news-item p {
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
}

#newsContainer .news-item .news-date {
    font-size: 0.85em;
    color: #888;
    margin-top: 10px;
}

.news-actions {
    text-align: right;
}

.news-actions button {
    background: none;
    border: none;
    color: rgba(62, 3, 74, 0.7);
    cursor: pointer;
    margin-left: 10px;
    font-size: 0.9em;
}

.news-actions button:hover {
    color: rgba(62, 3, 74, 1);
}



.captains {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  justify-content: center;
  align-items: center;
  padding: 20px;
 
  background-color: white;
}

.tile2 {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 150px;
  height: 150px;
  background-color: #eeeeee;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
  cursor: pointer;
}
.tile2 p {
  font-size: 16px;
  font-weight: bold;
  color: #333333;
}



    </style>
</head>
<body>
      
	<main>
   <div class="bottom-nav">
	   <div class="sport">Foot Ball</div>
		  <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Roster</a></li>
                        <li><a href="#">Players</a></li>
                        <li><a href="#">Coaches</a></li>
                        <li><a href="#">Schedule</a></li>
                        <li><a href="#">Record book</a></li>
						<li><a href="#">News</a></li>
                    </ul>
                </nav>
		  </div>
		
		<div class="content-container">
            <section class="main-content">
                <img src="football team.jpg" alt="Team Photo">
                <h1>Team 2024</h1>
				<article class="captains">
			<div class="tile2">
				<img src="wsdwd.png" alt="cap-men">
				<p>Men's Captain</p>
				</div>
				<div class="tile2">
				<img src="wsdwd.png" alt="cap-women">
					<p>Women's Captain</p>
				</div>
				<div class="tile2">
				<img src="wsdwd.png" alt="vc-men">
					<p>Men's ViceCaptain</p>
				</div>
				<div class="tile2">
				<img src="wsdwd.png" alt="vc-women">
					<p>Women's viceCaptain</p>
				</div>
			</article>
            </section>
			

             <aside class="latest-news">
             
            <h2>Latest News</h2>
            <div class="news-form">
                <input type="text" id="newsTopic" placeholder="News Topic">
                <textarea id="newsContent" placeholder="News Content"></textarea>
                <button onclick="addOrUpdateNews()">Add News</button>
            </div>
            <div id="newsContainer"></div>


            </aside>
        </div>
</main>
	<script src="navbar.js"></script>
    <script>
        // news.js

        let news = [];
let editingNewsIndex = null;

function addOrUpdateNews() {
    const topic = document.getElementById('newsTopic').value.trim();
    const content = document.getElementById('newsContent').value.trim();
    
    if (topic === "" || content === "") {
        alert("Please fill in both the topic and content fields.");
        return;
    }

    const newsItem = {
        topic: topic,
        content: content,
        date: new Date().toLocaleDateString()
    };

    if (editingNewsIndex !== null) {
        // Update existing news
        news[editingNewsIndex] = newsItem;
        document.querySelector('.news-form button').textContent = 'Add News';
        editingNewsIndex = null;
    } else {
        // Add new news
        news.push(newsItem);
    }

    document.getElementById('newsTopic').value = '';
    document.getElementById('newsContent').value = '';
    renderNews();
}

function deleteNews(index) {
    news.splice(index, 1);
    renderNews();
}

function editNews(index) {
    const newsItem = news[index];
    document.getElementById('newsTopic').value = newsItem.topic;
    document.getElementById('newsContent').value = newsItem.content;
    document.querySelector('.news-form button').textContent = 'Update News';
    editingNewsIndex = index;
}

function renderNews() {
    const container = document.getElementById('newsContainer');
    container.innerHTML = '';
    news.forEach((newsItem, index) => {
        const newsElement = document.createElement('div');
        newsElement.className = 'news-item';
        newsElement.innerHTML = `
            <h3>${newsItem.topic}</h3>
            <p>${newsItem.content}</p>
            <p class="news-date" >Posted on: ${newsItem.date}</p>
            <div class="news-actions">
                <button onclick="editNews(${index})">Edit</button>
                <button onclick="deleteNews(${index})">Delete</button>
            </div>
        `;
        container.appendChild(newsElement);
    });
}

renderNews();


    </script>
</body>
</html>
