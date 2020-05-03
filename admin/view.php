<?php

require_once plugin_dir_path( __FILE__ ) . 'class-super-duper-smtp-admin.php';

$sends_available = wp_remote_post(SUPER_DUPER_API . '/users/available', array(
    'body' => array(
        'host' => $_SERVER['HTTP_HOST']
    )
));

$sends_available = json_decode($sends_available['body']);
$sends_available = $sends_available->data

?>

<h1>Super Duper SMTP</h1>

<?php if(strstr($_SERVER['HTTP_HOST'], 'localhost') ) : ?>
    <div>
        <p class="limits-notice">Limits won't apply while you're developing your site locally.</p>
    </div>
    <div class="sends-available developer">
        <p>You have</p>
        <p class="sends-available--sends">/</p>
        <p>email submissions left this month.</p>
    </div>
<?php else : ?>
    <div class="sends-available">
        <p>You have</p>
        <p class="sends-available--sends"><?php echo $sends_available ?></p>
        <p>email submissions left this month.</p>
    </div> 
<?php endif ?>
<p class="upgrade-cta">On a free plan you can send or receive <b>10 emails/month free forever</b>. If you want to increase your monthly limit you can upgrade to one of our premium plans.<br />You can choose one of our plans below or <a href="https://superdupersmtp.com" target="_blank">click here to upgrade from our website.</a></p>
<div class="upgrade-plan">
    <div class="upgrade-box">
        <div class="upgrade-box--title">
            <p class="title">Super Duper 100</p>
        </div>
        <div class="upgrade-box--description">
            <p class="description">Send or receive up to 100 emails per month.</p>
        </div>
        <div class="upgrade-box--button">
            
            <a href="https://secure.2checkout.com/checkout/buy?merchant=250327353196&tpl=one-column&prod=SD100&qty=1" target="_blank" class="button">$1.49/month</a>
        </div>
    </div>
    <div class="upgrade-box">
        <div class="upgrade-box--title">
            <p class="title">Super Duper 200</p>
        </div>
        <div class="upgrade-box--description">
            <p class="description">Send or receive up to 200 emails per month.</p>
        </div>
        <div class="upgrade-box--button">
            <a href="https://secure.2checkout.com/checkout/buy?merchant=250327353196&tpl=one-column&prod=SD200&qty=1" target="_blank" class="button">$2.49/month</a>
        </div>
    </div>
    <div class="upgrade-box">
        <div class="upgrade-box--title">
            <p class="title">Super Duper 500</p>
        </div>
        <div class="upgrade-box--description">
            <p class="description">Send or receive up to 500 emails per month.</p>
        </div>
        <div class="upgrade-box--button">
            <a href="https://secure.2checkout.com/checkout/buy?merchant=250327353196&tpl=one-column&prod=SD500&qty=1" target="_blank" class="button">$4.49/month</a>
        </div>
    </div>
</div>