<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <title>Blog Website Template</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php include "header.php" ?>



  <div class="container">
    <h1 class="is-size-1 has-text-centered font-lato-bold" style="padding: 25px;">Trending Blogs</h1>
    <a href="/blog.php">
    <div class="columns" style="padding: 10px;">
      <article class="media card is-12 column has-background-white-ter">
        <figure class="media-left">
          <p class="image is-64x64 is-pulled-left" style="padding-right: 5px;">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p class="font-lato-medium">
              <strong class="font-lato-bold">John Smith</strong> <small class="font-lato-medium">@johnsmith</small
                class="font-lato-medium"> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor
              vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
    </div>
    </article>
    </a>
    <div class="columns is-12 " style="padding: 10px;">
      <article class="media card is-12 column has-background-white-ter">
        <figure class="media-left">
          <p class="image is-64x64 is-pulled-left" style="padding-right: 5px;">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p class="font-lato-medium">
              <strong class="font-lato-bold">John Smith</strong> <small class="font-lato-medium">@johnsmith</small
                class="font-lato-medium"> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor
              vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
    </div>
    </article>
    </article>
    <div class="columns is-12 " style="padding: 10px;">
      <article class="media card is-12 column has-background-white-ter">
        <figure class="media-left">
          <p class="image is-64x64 is-pulled-left" style="padding-right: 5px;">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p class="font-lato-medium">
              <strong class="font-lato-bold">John Smith</strong> <small class="font-lato-medium">@johnsmith</small
                class="font-lato-medium"> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor
              vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fas fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
    </div>
    </article>
  </div>

  <hr>

  <div class="container card has-background-white-ter" style="padding: 25px;">
    <div class="columns " style="padding: 25px;">
      <div class="column">
        <h2 class="is-size-4 font-lato-medium">Sign Up For Our Newsletter</h2>
      </div>
      <div class="column">
        <input class="input is-info" type="email" placeholder="Email Address">
      </div>
      <div class="column">
        <input class="button is-info" type="submit" value="Sign Up">
      </div>
    </div>
  </div>

  <hr>


  <script>
    $(document).ready(function () {

      // Check for click events on the navbar burger icon
      $(".navbar-burger").click(function () {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

      });
    });
  </script>
  <?php include "footer.php" ?>
</body>

</html>