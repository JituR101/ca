<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

<body>
  <?php include("includes/header.php");?>
  <div class="s-promo-block-v3 g-bg-position--center g-fullheight--xs" style=";"id="skew1" >
    <div class="container g-ver-center--sm g-padding-y-0--xs g-padding-y-0--sm">
      <div class="col-md-12 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
        <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".3s">
          <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white g-letter-spacing--2 g-margin-b-25--xs">Get Started</p>
            <h2 class="g-font-size-32--xs g-font-size-36--sm g-font-size-36--md g-color--white">Login</span></h2>
        </div>
      </div>
      <form class="form-horizontal" method ="post" action="reglog/login.php">
        <div class="g-margin-b-30--xs">
            <input type="email" name="Email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
        </div>
        <div class="g-margin-b-30--xs">
            <input type="password" name="Password" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
        </div>
        <div class="g-text-center--xs">
            <button type="submit" name="login" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
            <a href="forgot.php" class="g-color--white g-font-size-13--xs regclass">Forgot Password</a><br>
            <a href="regnew.php" class="g-color--white g-font-size-13--xs regclass">Not Registered?</a><br>
        </div>
      </form>
                <!-- <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-30--xs g-font-size-30--sm g-font-size-30--lg g-font-weight--600 g-color--white">Your Story Starts With Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a href=#register>
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-right"></i>
                                <span class="text-uppercase g-font-size-25--xs g-color--white g-padding-x-15--xs"><b>Register Now</b></span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <?php include("includes/footer.php") ?>

        <?php include("includes/scripts.php") ?>
      </body>
      </html>
