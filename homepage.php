<?php
/**
 * Template Name: Homepage
 * Description: Custom page template for BAP FAQ
 */
namespace AmericanPromise\AmericanPromiseTheme;

remove_action( "genesis_loop", "genesis_do_loop" );
// add a custom loop
add_action( "genesis_loop",__NAMESPACE__  . "\business_homepage" );

function business_homepage(){
?>
    <p>Our mission is to unite business leaders in non-partisan advocacy for a 28th Amendment to end unlimited political spending, foster honest competition, and reestablish integrity in government.</p>

    <hr />

    <div class="first two-thirds">
        <!--
        <div style="max-width: 80%; margin-right: auto; margin-left: auto;">[gallery slick_active="true" size="large" media_category="8" sl_autoplay="true" link="none" sl_autoplayspeed="6000" sl_arrows="false" sl_dots="true" ids="1953,1857,2569,1856,2570,1851,1852,3210,3208,3209,3207"]

        </div>

        <hr />
        -->
        <div class="card-container business-first business-one-half">
            <a target="_Blank" style="color: white;" href="https://www.americanpromise.net/pay-to-play-is-a-losing-proposition-for-business-society/" rel="noopener noreferrer">
                <div class="image-card business-image-card" style="background: url('https://www.americanpromise.net/wp-content/uploads/2019/01/pledgeProgramBox.png') no-repeat; background-size: cover;">
                    <div class="image-card__text" style="overflow-anchor: none;">
                        <h2 style="color: white;">Why Pay-to-Play Politics is a Losing Proposition for Business &amp; Society</h2>
                        <p class="hide-me" style="font-size: 15px;">In a strong economy, companies compete based on the value they create in the marketplace. In America today, free enterprise and the open exchange of ideas are too often replaced by ‘pay-to-play,’ where firms and special interests compete for favors based on political spending. <span style="color:#366ab3">Read More</span></p>
            </a>

        </div>
    </div>
    </div>

    <div class="card-container business-one-half">
        <a target="_Blank" style="color: white;" href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/" rel="noopener noreferrer">
            <div class="image-card business-image-card" style="background: url('https://www.americanpromise.net/wp-content/uploads/2019/01/NCLCBox.png') no-repeat; background-size: cover;">
                <div class="image-card__text">
                    <h2 style="color: white;">Take Action</h2>
                    <p class="hide-me" style="font-size: 15px;">As long as unlimited political spending drives the U.S. legislative agenda, business innovation, honest competition, free enterprise—and representative democracy itself—are at risk. When business leaders from across the political, sectoral, and geographic divides speak as one, Congress will listen. Together, we can bring about needed change. <span style="color:#366ab3">Read More</span></p>
        </a>

    </div>
    </div>
    </div>

    <!--
    <div class="card-container business-one-half">
    <a target="_Blank" style="color: white;" href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/" rel="noopener noreferrer">
    <div class="image-card business-image-card" style="background: url('https://www.americanpromise.net/wp-content/uploads/2019/01/w28Box.png') no-repeat; background-size: cover;">
    <div class="image-card__text">
    <h2 style="color: white;">What We Believe</h2>
    <div class="hide-me">
    <p style="font-size: 15px;">As business leaders and citizens with a wide variety of political interests and affiliations, we are convinced that the current dysfunction of our political system is not self-correcting; systemic change is required to restore the health of our civic institutions and the integrity of our government. <span style="color:#366ab3">Read More</span></p>
    </a>

    </div>
    </div>
    </div>
    </div>
    -->
    <div class="card-container business-first business-one-half">
        <a target="_Blank" style="color: white;" href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/building-a-national-network/" rel="noopener noreferrer">
            <div class="image-card business-image-card" style="background: url('https://www.americanpromise.net/wp-content/uploads/2019/01/BusinessCouncilsBox.png') no-repeat; background-size: cover;">
                <div class="image-card__text" style="overflow-anchor: none;">
                    <h2 style="color: white;">Local Chapters, National Network</h2>
                    <p class="hide-me" style="font-size: 15px;">BAP is supporting a growing network of chapters across the country, from the San Francisco Bay Area to Boston and everywhere in between. Business leaders representing local and national interests are working together to end runaway political spending, restore honest competition, and strengthen representative democracy. <span style="color:#366ab3">Read More</span></p>
        </a>

    </div>
    </div>
    </div>

    </div>
    <div class="business-content-box one-third" style="margin-bottom: 15px; text-align: center; opacity: .8; padding: 5px;">
        <h1 style="text-align: center; color: white;">Business for American Promise</h1>
        <strong>As business leaders and citizens with a wide variety of political interests and affiliations, we are convinced that the current dysfunction of our political system is not self-correcting; systemic change is required to restore the health of our civic institutions and the integrity of our government.</strong>

        We provide educational forums, tools, and support to help business leaders clarify where they stand and take effective action to advance reasonable reform. We are a program of American Promise, the only non-partisan organization with a 10-year plan to unite Americans as they craft, pass, and ratify the 28th Amendment.

        <hr />

        <h1>About American Promise</h1>
        American Promise is the leading non-partisan organization advancing the charge to win the 28th Amendment. <a target="_Blank" href="https://www.americanpromise.net/who-we-are/about-american-promise/" rel="noopener noreferrer">Read More</a>

        <hr />

        <h1>News</h1>
        <div style="max-height: 450px; overflow: scroll; overflow-x: hidden; margin: 5px;"><a target="_Blank" class="twitter-timeline" href="https://twitter.com/usapromise?ref_src=twsrc%5Etfw" rel="noopener noreferrer">Tweets by usapromise</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

        <hr />

        <a target="_Blank" href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-faq/" rel="noopener noreferrer"><button style="font-size: 3rem; padding-left: 50px; padding-right: 50px; background-color: #474747; color: white;">FAQ </button></a>

        <a target="_Blank" href="https://drive.google.com/drive/u/1/folders/14ZvP7q-8MDQs695vRBpH1D-y9-tb0f3O" rel="noopener noreferrer"><button style="font-size: 3rem; padding-left: 50px; padding-right: 50px; background-color: #474747; color: white;">Resource Library </button></a>

    </div>
<?php
}

genesis();