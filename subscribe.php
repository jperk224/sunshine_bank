<?php

require 'partials/header.php';

?>

<style>

html {
    background-image: linear-gradient(to right, rgb(109,127,204), rgb(209,231,238));
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}

</style>

<div class="subscribe-container">
    <div class="subscribe">
        <h1>Thank You For Your Inquiry</h1>
        <h4>We are thirlled to have the opportunity to serve our community in the coming days. Please subscribe to receive the latest updates regarding our planned opening and service availability.</h4>
        <div id="embed_signup">
            <form action="thanks.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn-lg subscribe-button">
            </form>
        </div>
        <h4 class="return"><a href="index.php">Sunshine Bank Home</a></h4>
    </div>
</div>
<?php require 'partials/footer.php' ?>