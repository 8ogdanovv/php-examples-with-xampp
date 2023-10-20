<main id="main" class="main" role="main">
<style>
    :root {
      --primary: #000;
      --secondary: #4c4;
      --bg: #fafafa;
      --font-base: 16px;
      --gradient: linear-gradient(135deg, blue, green, yellow);
      font-size: calc(var(--font-base) + 0.5vw);
    }

    .main {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      padding: 1rem;
      text-align: center;
      font-weight: bold;
    }

    .card {
      color: var(--primary);
      border: 1px solid var(--secondary);
      border-radius: 0.5rem;
      padding: 1rem;
      display: flex;
      align-items: center;
    }

    .card_image {
      width: 50vmin;
      height: 50vmin;
      aspect-ratio: 1/1 !important;
      border-radius: 0.5rem;
      background: var(--gradient);
    }

    .card_title {
      position: relative;
      z-index: 1;
      font-size: 1.5rem;
      margin: 0.625rem 0;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .card_text {
      font-size: 1rem;
    }

    .card_title,
    .card_text {
      background-color: var(--bg);
      border-radius: 0.5rem;
      padding: 0.5rem;
    }

    /* Mobile styles */
    @media only screen and (max-width: 600px) {
      /* Add your mobile styles here */
      .card {
        padding: 0.625rem;
        flex-direction: column;
      }
      .card_title {
        font-size: 1.25rem;
        margin: 0.625rem 0;
      }
      .card_text {
        font-size: 0.875rem;
      }
    }

    /* Tablet styles */
    @media only screen and (min-width: 601px) and (max-width: 1024px) {
      /* Add your tablet styles here */
      .card {
        padding: 0.9375rem;
      }
      .card_title {
        font-size: 1.375rem;
        margin: 0.625rem 0;
      }
      .card_text {
        font-size: 0.9375rem;
      }
    }

    /* Desktop styles */
    @media only screen and (min-width: 1025px) {
      /* Add your desktop styles here */
      .card {
        padding: 1.25rem;
      }
      .card_title {
        font-size: 1.5rem;
        margin: 0.625rem 0;
      }
      .card_text {
        font-size: 1rem;
      }
    }
</style>

<h2>Cards</h2>

<?php
  // Pass the base URLs for users and posts
  $users_base_url = "https://dummyjson.com/users";
  $posts_base_url = "https://dummyjson.com/posts";

  // Fetch data from the URLs
  $users_response = file_get_contents($users_base_url);
  $users_data = json_decode($users_response, true)['users'];
  
  $posts_response = file_get_contents($posts_base_url);
  $posts_data = json_decode($posts_response, true)['posts'];
  
  // Loop through the data and render the HTML
  for ($i = 0; $i < 10; $i++) {
    $user = $users_data[$i];
    $post = $posts_data[$i];
    $image = $user['image'];
    $title = $post['title'];
    $text = $post['body'];

    echo "<article class='card'>";
    echo "<img src='$image' alt='User Image' class='card_image'>";
    echo "<div class='card_content'>";
    echo "<h3 class='card_title'>$title</h3>";
    echo "<p class='card_text'>$text</p>";
    echo "</div>";
    echo "</article>";
  }
  ?>
</main>