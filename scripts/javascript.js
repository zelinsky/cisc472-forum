$(document).ready(function() {

    const showPosts = function(posts) {
	const postDisplay = $("#posts");
	postDisplay.html('');
	posts.forEach( p => {
	    postDisplay.append(`<h3 id="post_id">Post ${p.id}</h3><hr><p id="post_content">${p.content}</p><p id="post_author">${p.author}</p><time id="post_timestamp">${p.timestamp}</time>`);
	});
    }
    
    $("#get_posts_btn").click( () => {
	$.ajax({
	    method: "GET",
	    url: "api/api.php",
	    success: data=>{showPosts(data)}
	});
    });

});
