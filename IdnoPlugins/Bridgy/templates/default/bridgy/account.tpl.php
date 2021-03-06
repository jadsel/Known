<div class="row">

    <div class="span10 offset1">

        <?= $this->draw('account/menu') ?>
        <h1>Social Interactions</h1>
        <h2>Connect with Bridgy</h2>

    </div>

    <div class="span10 offset1">

        <p class="explanation">
            <a href="https://www.brid.gy">Bridgy</a> is a service that pulls social interactions - such as likes and
            retweets - back to your website.</p>

        <p class="explanation">If you send content from Known to Facebook or Twitter, use Bridgy to save comments and
            interactions from those networks to the original post on your Known site.</p>

        <p class="explanation">To get started, activate Bridgy for the social network.

        </p>

    </div>

</div>
<div class="row">

    <div class="span6 offset1">

        <?php if ($vars['facebook_enabled']) { ?>
        <form action="https://www.brid.gy/delete/start" method="post">
            <input type="hidden" name="feature" value="listen"></input>
            <input type="hidden" name="key" value="<?=$vars['facebook_key']?>"></input>
            <input type="hidden" name="callback" value="<?=\Idno\Core\site()->config()->getDisplayURL() . 'account/bridgy/disabled/?service=facebook'?>">
            <p>
                <button class="connect fb connected">Facebook + Bridgy connected</button>
            </p>
            <p>
                Bridgy is pulling in comments and likes from Facebook. Click to disable.
            </p>
        </form>
        <?php } else { ?>
        <form action="https://www.brid.gy/facebook/start" method="post">
            <input type="hidden" name="feature" value="listen"></input>
            <input type="hidden" name="callback" value="<?=\Idno\Core\site()->config()->getDisplayURL() . 'account/bridgy/enabled/?service=facebook'?>">
            <p>
                <button class="connect fb">Activate Facebook + Bridgy</button>
            </p>
            <p>
                Bridgy pulls in comments and likes from Facebook.
            </p>
        </form>
        <?php } ?>

        <?php if ($vars['twitter_enabled']) { ?>
        <form action="https://www.brid.gy/delete/start" method="post">
            <input type="hidden" name="feature" value="listen"></input>
            <input type="hidden" name="key" value="<?=$vars['twitter_key']?>"></input>
            <input type="hidden" name="callback" value="<?=\Idno\Core\site()->config()->getDisplayURL() . 'account/bridgy/disabled/?service=twitter'?>">
            <p>
                <button class="connect fb connected">Twitter + Bridgy connected</button>
            </p>
            <p>
                Bridgy is pulling in replies, favorites, and retweets from Twitter. Click to disable.
            </p>
        </form>
        <?php } else { ?>
        <form action="https://www.brid.gy/twitter/start" method="post">
            <input type="hidden" name="feature" value="listen"></input>
            <input type="hidden" name="callback" value="<?=\Idno\Core\site()->config()->getDisplayURL() . 'account/bridgy/enabled/?service=twitter'?>">
            <p>
                <button class="connect tw">Activate Twitter + Bridgy</button>
            </p>
            <p>
                Bridgy pulls in replies, favorites, and retweets from Twitter.
            </p>
        </form>
        <?php } ?>
    </div>

</div>
